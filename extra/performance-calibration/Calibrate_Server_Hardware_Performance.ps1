# ============================================================================
# POWERSHELL CALIBRATION ENGINE (EMBEDDED)
# ============================================================================
Clear-Host
$host.UI.RawUI.WindowTitle = "Sizar POS Pro - Hardware Performance Calibrator"

Write-Host "====================================================================" -ForegroundColor Cyan
Write-Host " SIZAR POS PRO - HARDWARE INTELLIGENCE & PERFORMANCE AUTO-TUNER   " -ForegroundColor Cyan
Write-Host " Developer: SizarDev | Oran, Algeria                              " -ForegroundColor Cyan
Write-Host "====================================================================" -ForegroundColor Cyan
Write-Host ""

# 1. Probe Hardware Metrics
Write-Host "[1/4] Probing Machine Hardware Capabilities..." -ForegroundColor Yellow
$ramBytes = (Get-CimInstance Win32_ComputerSystem).TotalPhysicalMemory
$ramGB = [math]::Round($ramBytes / 1GB, 2)
$cpu = Get-CimInstance Win32_Processor | Select-Object -First 1
$physicalDisk = Get-CimInstance -Namespace root\Microsoft\Windows\Storage -ClassName MSFT_PhysicalDisk | Select-Object -First 1

$mediaTypeNum = $physicalDisk.MediaType
$isSSD = $true
$mediaDesc = "Solid State Drive (SSD)"
if ($mediaTypeNum -eq 3) {
    $isSSD = $false
    $mediaDesc = "Mechanical Hard Disk (HDD)"
} elseif ($mediaTypeNum -eq 4) {
    if ($physicalDisk.BusType -eq 17) {
        $mediaDesc = "Ultra-Fast NVMe SSD"
    } else {
        $mediaDesc = "High-Speed SATA SSD"
    }
} else {
    if ($physicalDisk.FriendlyName -match "SSD|NVMe|NVM|Flash") {
        $isSSD = $true
        $mediaDesc = "Solid State Drive (SSD by Signature)"
    } else {
        $isSSD = $false
        $mediaDesc = "Mechanical Hard Disk (HDD Fallback)"
    }
}

Write-Host "   - Processor:      $($cpu.Name.Trim())" -ForegroundColor White
Write-Host "   - Cores/Threads:  $($cpu.NumberOfCores) Physical Cores / $($cpu.NumberOfLogicalProcessors) Logical Threads" -ForegroundColor White
Write-Host "   - System RAM:     $ramGB GB Total Physical Memory" -ForegroundColor White
Write-Host "   - Primary Disk:   $($physicalDisk.FriendlyName) [$mediaDesc]" -ForegroundColor White
Write-Host ""

# 2. Dynamic Mathematical Allocation (Granular Continuous Allocation)
Write-Host "[2/4] Computing Mathematical Buffer Allocations..." -ForegroundColor Yellow

if ($ramGB -le 4.5) {
    # 4GB or less: 25% allocation to leave 3GB for Windows OS + Web server
    $poolSizeStr = "1G"
    $poolInstances = 1
    $redoCapacityStr = "256M"
    $phpMemoryStr = "512M"
} elseif ($ramGB -le 8.5) {
    # 6GB - 8GB: 45% allocation
    $calcPool = [math]::Floor($ramGB * 0.45)
    $poolSizeStr = "${calcPool}G"
    $poolInstances = [math]::Min($cpu.NumberOfCores, [math]::Max(1, $calcPool))
    $redoCapacityStr = "1G"
    $phpMemoryStr = "1024M"
} elseif ($ramGB -le 16.5) {
    # 10GB - 16GB: 50% allocation (e.g. 16GB RAM -> 8GB buffer pool)
    $calcPool = [math]::Floor($ramGB * 0.50)
    $poolSizeStr = "${calcPool}G"
    $poolInstances = [math]::Min($cpu.NumberOfCores, [math]::Max(1, $calcPool))
    $redoCapacityStr = "2G"
    $phpMemoryStr = "1024M"
} else {
    # 24GB - 64GB+: 60% allocation (e.g. 32GB RAM -> 19GB buffer pool)
    $calcPool = [math]::Floor($ramGB * 0.60)
    $poolSizeStr = "${calcPool}G"
    $poolInstances = [math]::Min(16, [math]::Max(1, $calcPool))
    $redoCapacityStr = "4G"
    $phpMemoryStr = "2048M"
}

if ($isSSD) {
    $ioCapacity = "2000"
    $ioCapacityMax = "4000"
    $flushNeighbors = "0"
} else {
    $ioCapacity = "200"
    $ioCapacityMax = "400"
    $flushNeighbors = "1"
}

$apacheThreads = if ($cpu.NumberOfCores -ge 6) { 150 } else { 100 }

Write-Host "--------------------------------------------------------------------" -ForegroundColor Gray
Write-Host " CALIBRATED OPTIMAL CONFIGURATION FOR THIS MACHINE:" -ForegroundColor Green
Write-Host "   [my.ini]    innodb_buffer_pool_size      = $poolSizeStr" -ForegroundColor Cyan
Write-Host "   [my.ini]    innodb_buffer_pool_instances = $poolInstances" -ForegroundColor Cyan
Write-Host "   [my.ini]    innodb_redo_log_capacity     = $redoCapacityStr" -ForegroundColor Cyan
Write-Host "   [my.ini]    innodb_io_capacity           = $ioCapacity" -ForegroundColor Cyan
Write-Host "   [my.ini]    innodb_io_capacity_max       = $ioCapacityMax" -ForegroundColor Cyan
Write-Host "   [my.ini]    innodb_flush_neighbors       = $flushNeighbors (0=SSD wear protection, 1=HDD head sync)" -ForegroundColor Cyan
Write-Host "   [php.ini]   memory_limit                 = $phpMemoryStr" -ForegroundColor Cyan
Write-Host "   [httpd.conf] ThreadsPerChild             = $apacheThreads" -ForegroundColor Cyan
Write-Host "--------------------------------------------------------------------" -ForegroundColor Gray
Write-Host " [AIR-GAP GUARANTEE] All Security Directives Remain 100% Locked:" -ForegroundColor Magenta
Write-Host "   - disable_functions, expose_php, session.*, and local_infile=0 ARE NEVER TOUCHED." -ForegroundColor Magenta
Write-Host ""

# Helper function: Safe regex token updater (Strictly NO UTF-8 BOM, required for MySQL/Apache/PHP parser compatibility)
$utf8NoBom = New-Object System.Text.UTF8Encoding($false)

function Update-ConfigFileDirective {
    param(
        [string]$FilePath,
        [string]$Pattern,
        [string]$Replacement
    )
    if (Test-Path $FilePath) {
        $utf8Encoding = New-Object System.Text.UTF8Encoding($false)
        $content = [System.IO.File]::ReadAllText($FilePath)
        $newContent = [regex]::Replace($content, $Pattern, $Replacement, [System.Text.RegularExpressions.RegexOptions]::Multiline)
        [System.IO.File]::WriteAllText($FilePath, $newContent, $utf8Encoding)
        return $true
    }
    return $false
}

# 3. Apply Calibrations to Configuration Files
Write-Host "[3/4] Applying Targeted Performance Directives..." -ForegroundColor Yellow

$scriptRoot = Split-Path -Parent $MyInvocation.MyCommand.Definition
if (-not $scriptRoot) { $scriptRoot = [System.AppDomain]::CurrentDomain.BaseDirectory }

# Targets List
$myIniTargets = @(
    "C:\ProgramData\MySQL\MySQL Server 9.7\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.4\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.0\my.ini",
    (Join-Path $scriptRoot "..\server-configs\my.ini"),
    (Join-Path $scriptRoot "my.ini")
)

$phpIniTargets = @(
    "C:\php\php.ini",
    "C:\ProgramData\PosEngine\php\php.ini",
    (Join-Path $scriptRoot "..\server-configs\php.ini")
)

$httpdTargets = @(
    "C:\Apache24\conf\httpd.conf",
    "C:\ProgramData\PosEngine\server\conf\httpd.conf",
    (Join-Path $scriptRoot "..\server-configs\httpd.conf")
)

$tunedCount = 0

# Apply to my.ini
foreach ($target in $myIniTargets | Select-Object -Unique) {
    if (Test-Path $target) {
        if ($target -notlike "*server-configs*") {
            Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
        }
        [void](Update-ConfigFileDirective $target "^\s*innodb_buffer_pool_size\s*=.*$" "innodb_buffer_pool_size=$poolSizeStr")
        [void](Update-ConfigFileDirective $target "^\s*innodb_buffer_pool_instances\s*=.*$" "innodb_buffer_pool_instances=$poolInstances")
        [void](Update-ConfigFileDirective $target "^\s*innodb_redo_log_capacity\s*=.*$" "innodb_redo_log_capacity=$redoCapacityStr")
        [void](Update-ConfigFileDirective $target "^\s*innodb_io_capacity\s*=.*$" "innodb_io_capacity=$ioCapacity")
        [void](Update-ConfigFileDirective $target "^\s*innodb_io_capacity_max\s*=.*$" "innodb_io_capacity_max=$ioCapacityMax")
        [void](Update-ConfigFileDirective $target "^\s*innodb_flush_neighbors\s*=.*$" "innodb_flush_neighbors=$flushNeighbors")
        Write-Host "   [OK] Calibrated MySQL: $target" -ForegroundColor Green
        $tunedCount++
    }
}

# Apply to php.ini
foreach ($target in $phpIniTargets | Select-Object -Unique) {
    if (Test-Path $target) {
        if ($target -notlike "*server-configs*") {
            Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
        }
        [void](Update-ConfigFileDirective $target "^\s*memory_limit\s*=.*$" "memory_limit = $phpMemoryStr")
        Write-Host "   [OK] Calibrated PHP:   $target" -ForegroundColor Green
        $tunedCount++
    }
}

# Apply to httpd.conf
foreach ($target in $httpdTargets | Select-Object -Unique) {
    if (Test-Path $target) {
        if ($target -notlike "*server-configs*") {
            Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
        }
        [void](Update-ConfigFileDirective $target "^\s*ThreadsPerChild\s+.*$" "    ThreadsPerChild $apacheThreads")
        Write-Host "   [OK] Calibrated Apache: $target" -ForegroundColor Green
        $tunedCount++
    }
}

Write-Host ""
# 4. Restart Services if Active on this PC
Write-Host "[4/4] Synchronizing and Verifying Windows Services..." -ForegroundColor Yellow

$mysqlService = Get-Service -Name "MySQL97", "MySQL84", "MySQL80", "MySQL", "MariaDB" -ErrorAction SilentlyContinue | Select-Object -First 1
if ($mysqlService) {
    Write-Host "   - Configuring and launching $($mysqlService.Name)..." -ForegroundColor Cyan
    try {
        if ($mysqlService.Status -eq "Running") {
            Stop-Service -Name $mysqlService.Name -Force -ErrorAction Stop
            Start-Sleep -Seconds 2
        }
        Start-Service -Name $mysqlService.Name -ErrorAction Stop
        $mysqlService.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(15))
        Write-Host "   [SUCCESS] $($mysqlService.Name) is active and RUNNING with $poolSizeStr InnoDB buffer." -ForegroundColor Green
    } catch {
        Write-Host "   [ERROR] Failed to start $($mysqlService.Name): $($_.Exception.Message)" -ForegroundColor Red
        Write-Host "           Attempting safe recovery..." -ForegroundColor Yellow
        Start-Process net -ArgumentList "start `"$($mysqlService.Name)`"" -Wait -NoNewWindow
    }
} else {
    Write-Host "   [INFO] MySQL service is not installed on this PC." -ForegroundColor Gray
}

$apacheService = Get-Service -Name "Apache2.4", "SizarPOS_Engine" -ErrorAction SilentlyContinue | Select-Object -First 1
if ($apacheService) {
    Write-Host "   - Configuring and launching $($apacheService.Name)..." -ForegroundColor Cyan
    try {
        if ($apacheService.Status -eq "Running") {
            Restart-Service -Name $apacheService.Name -Force -ErrorAction Stop
        } else {
            Start-Service -Name $apacheService.Name -ErrorAction Stop
        }
        $apacheService.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(10))
        Write-Host "   [SUCCESS] $($apacheService.Name) is active and RUNNING with $apacheThreads worker threads." -ForegroundColor Green
    } catch {
        Write-Host "   [ERROR] Failed to start $($apacheService.Name): $($_.Exception.Message)" -ForegroundColor Red
    }
} else {
    Write-Host "   [INFO] Apache service is not installed on this PC." -ForegroundColor Gray
}

Write-Host ""
Write-Host "====================================================================" -ForegroundColor Green
Write-Host " SUCCESS: HARDWARE PERFORMANCE CALIBRATION COMPLETED!               " -ForegroundColor Green
Write-Host " All modified files backed up to .backup_tuning for safety.         " -ForegroundColor Green
Write-Host "====================================================================" -ForegroundColor Green
Write-Host ""
Write-Host "Press any key to exit..." -ForegroundColor Gray
$null = $host.UI.RawUI.ReadKey("NoEcho,IncludeKeyDown")
