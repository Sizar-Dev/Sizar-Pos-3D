# ============================================================================
# SIZAR POS PRO — ENTERPRISE HARDWARE INTELLIGENCE & PERFORMANCE CALIBRATOR
# Author: SizarDev | Oran, Algeria
# Platform: Native Windows 10 / Windows 11 (Zero External Dependencies)
# Encoding Guarantee: Strict UTF-8 WITHOUT BOM (100% MySQL/Apache/PHP Safe)
# ============================================================================

$Host.UI.RawUI.WindowTitle = "Sizar POS Pro - Hardware Intelligence & Performance Calibrator"
$utf8NoBom = New-Object System.Text.UTF8Encoding($false)

function Test-IsAdmin {
    $identity = [Security.Principal.WindowsIdentity]::GetCurrent()
    $principal = New-Object Security.Principal.WindowsPrincipal($identity)
    return $principal.IsInRole([Security.Principal.WindowsBuiltInRole]::Administrator)
}

function Show-Header {
    param([bool]$isAdmin)
    Clear-Host
    Write-Host "╔══════════════════════════════════════════════════════════════════════╗" -ForegroundColor Cyan
    Write-Host "║       SIZAR POS PRO — HARDWARE INTELLIGENCE & AUTO-CALIBRATOR        ║" -ForegroundColor Cyan
    Write-Host "║       Enterprise Server Performance Engine | Developer: SizarDev     ║" -ForegroundColor Cyan
    Write-Host "╚══════════════════════════════════════════════════════════════════════╝" -ForegroundColor Cyan
    if ($isAdmin) {
        Write-Host " [SECURITY PRIVILEGE]: " -NoNewline -ForegroundColor DarkGray
        Write-Host "ELEVATED ADMINISTRATOR (Full System Injection Allowed)" -ForegroundColor Green
    } else {
        Write-Host " [SECURITY PRIVILEGE]: " -NoNewline -ForegroundColor DarkGray
        Write-Host "STANDARD USER (File-Only Mode / System Injection Restricted)" -ForegroundColor Yellow
    }
    Write-Host ""
}

# ----------------------------------------------------------------------------
# 1. HARDWARE DETECTION & INTELLIGENCE
# ----------------------------------------------------------------------------
function Get-HardwareIntelligence {
    Write-Host "[1/2] Probing Hardware Capabilities & Architecture..." -ForegroundColor Yellow
    
    # Physical Memory
    $ramBytes = (Get-CimInstance Win32_ComputerSystem).TotalPhysicalMemory
    $ramGB = [math]::Round($ramBytes / 1GB, 2)
    $os = Get-CimInstance Win32_OperatingSystem
    $freeRamGB = [math]::Round($os.FreePhysicalMemory / 1MB, 2)

    # Processor
    $cpu = Get-CimInstance Win32_Processor | Select-Object -First 1
    $cpuName = $cpu.Name.Trim()
    $cores = $cpu.NumberOfCores
    $threads = $cpu.NumberOfLogicalProcessors

    # Storage
    $physicalDisk = Get-CimInstance -Namespace root\Microsoft\Windows\Storage -ClassName MSFT_PhysicalDisk -ErrorAction SilentlyContinue | Select-Object -First 1
    $isSSD = $true
    $mediaDesc = "Solid State Drive (SSD)"
    
    if ($physicalDisk) {
        $diskName = $physicalDisk.FriendlyName
        $mediaTypeNum = $physicalDisk.MediaType
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
    } else {
        $diskName = "Primary System Volume"
        $isSSD = $true
        $mediaDesc = "Solid State Drive (Assumed SSD)"
    }

    # Installed / Active Services
    $mysqlSvc = Get-Service -Name "MySQL97", "MySQL84", "MySQL80", "MySQL", "MariaDB" -ErrorAction SilentlyContinue | Select-Object -First 1
    $apacheSvc = Get-Service -Name "Apache2.4", "SizarPOS_Engine" -ErrorAction SilentlyContinue | Select-Object -First 1

    return [PSCustomObject]@{
        RamTotalGB   = $ramGB
        RamFreeGB    = $freeRamGB
        CpuName      = $cpuName
        Cores        = $cores
        Threads      = $threads
        DiskName     = $diskName
        DiskDesc     = $mediaDesc
        IsSSD        = $isSSD
        MySQLService = $mysqlSvc
        ApacheService= $apacheSvc
    }
}

# ----------------------------------------------------------------------------
# 2. CONTINUOUS DYNAMIC ALLOCATION FORMULAS
# ----------------------------------------------------------------------------
function Get-OptimalParameters {
    param($hw)
    
    $ramGB = $hw.RamTotalGB
    
    if ($ramGB -le 4.5) {
        $poolSize = "1G"
        $instances = 1
        $redo = "256M"
        $phpMem = "512M"
    } elseif ($ramGB -le 8.5) {
        $calcPool = [math]::Floor($ramGB * 0.45)
        $poolSize = "${calcPool}G"
        $instances = [math]::Min($hw.Cores, [math]::Max(1, $calcPool))
        $redo = "1G"
        $phpMem = "1024M"
    } elseif ($ramGB -le 16.5) {
        $calcPool = [math]::Floor($ramGB * 0.50)
        $poolSize = "${calcPool}G"
        $instances = [math]::Min($hw.Cores, [math]::Max(1, $calcPool))
        $redo = "2G"
        $phpMem = "1024M"
    } else {
        $calcPool = [math]::Floor($ramGB * 0.60)
        $poolSize = "${calcPool}G"
        $instances = [math]::Min(16, [math]::Max(1, $calcPool))
        $redo = "4G"
        $phpMem = "2048M"
    }

    if ($hw.IsSSD) {
        $ioCap = "2000"
        $ioCapMax = "4000"
        $flushNeighbors = "0"
    } else {
        $ioCap = "200"
        $ioCapMax = "400"
        $flushNeighbors = "1"
    }

    $apacheThreads = if ($hw.Cores -ge 6) { 150 } else { 100 }

    return [ordered]@{
        innodb_buffer_pool_size      = $poolSize
        innodb_buffer_pool_instances = $instances
        innodb_redo_log_capacity     = $redo
        innodb_io_capacity           = $ioCap
        innodb_io_capacity_max       = $ioCapMax
        innodb_flush_neighbors       = $flushNeighbors
        memory_limit                 = $phpMem
        ThreadsPerChild              = $apacheThreads
    }
}

# ----------------------------------------------------------------------------
# 3. DISPLAY INTELLIGENCE REPORT
# ----------------------------------------------------------------------------
function Show-IntelligenceReport {
    param($hw, $params)
    
    Write-Host "┌──────────────────────────────────────────────────────────────────────┐" -ForegroundColor DarkCyan
    Write-Host "│ DETECTED HARDWARE SPECIFICATIONS                                     │" -ForegroundColor Cyan
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor DarkCyan
    Write-Host ("│  • Processor:       {0,-48} │" -f ($hw.CpuName.Substring(0, [math]::Min(48, $hw.CpuName.Length)))) -ForegroundColor White
    Write-Host ("│  • Compute Cores:   {0} Physical Cores / {1} Logical Threads{2,-18} │" -f $hw.Cores, $hw.Threads, "") -ForegroundColor White
    Write-Host ("│  • System Memory:   {0} GB Total Physical RAM ({1} GB Currently Free){2,-9} │" -f $hw.RamTotalGB, $hw.RamFreeGB, "") -ForegroundColor White
    Write-Host ("│  • Storage Media:   {0,-48} │" -f "$($hw.DiskDesc)") -ForegroundColor White
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor DarkCyan
    Write-Host "│ LIVE WINDOWS SERVICES STATUS                                         │" -ForegroundColor Cyan
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor DarkCyan
    
    $mysqlText = if ($hw.MySQLService) { "$($hw.MySQLService.Name) [Status: $($hw.MySQLService.Status)]" } else { "Not Detected / Not Installed" }
    $apacheText = if ($hw.ApacheService) { "$($hw.ApacheService.Name) [Status: $($hw.ApacheService.Status)]" } else { "Not Detected / Not Installed" }
    
    Write-Host ("│  • MySQL Service:   {0,-48} │" -f $mysqlText) -ForegroundColor $(if ($hw.MySQLService -and $hw.MySQLService.Status -eq "Running") { "Green" } else { "Yellow" })
    Write-Host ("│  • Apache Service:  {0,-48} │" -f $apacheText) -ForegroundColor $(if ($hw.ApacheService -and $hw.ApacheService.Status -eq "Running") { "Green" } else { "Yellow" })
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor DarkCyan
    Write-Host "│ HARDWARE INTELLIGENCE RECOMMENDED TUNING                             │" -ForegroundColor Cyan
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor DarkCyan
    Write-Host ("│  [my.ini]    innodb_buffer_pool_size      = {0,-26} │" -f $params.innodb_buffer_pool_size) -ForegroundColor Green
    Write-Host ("│  [my.ini]    innodb_buffer_pool_instances = {0,-26} │" -f $params.innodb_buffer_pool_instances) -ForegroundColor Green
    Write-Host ("│  [my.ini]    innodb_redo_log_capacity     = {0,-26} │" -f $params.innodb_redo_log_capacity) -ForegroundColor Green
    Write-Host ("│  [my.ini]    innodb_io_capacity           = {0,-26} │" -f "$($params.innodb_io_capacity) (Max: $($params.innodb_io_capacity_max))") -ForegroundColor Green
    Write-Host ("│  [my.ini]    innodb_flush_neighbors       = {0,-26} │" -f "$($params.innodb_flush_neighbors) (0=SSD wear protect, 1=HDD)") -ForegroundColor Green
    Write-Host ("│  [php.ini]   memory_limit                 = {0,-26} │" -f $params.memory_limit) -ForegroundColor Green
    Write-Host ("│  [httpd.conf]ThreadsPerChild              = {0,-26} │" -f $params.ThreadsPerChild) -ForegroundColor Green
    Write-Host "└──────────────────────────────────────────────────────────────────────┘" -ForegroundColor DarkCyan
    Write-Host ""
}

# ----------------------------------------------------------------------------
# 4. CONFIGURATION ENGINE (BOM-FREE GUARANTEE)
# ----------------------------------------------------------------------------
function Update-ConfigDirective {
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

function Apply-TuningParameters {
    param(
        [hashtable]$Params,
        [string[]]$MyIniList,
        [string[]]$PhpIniList,
        [string[]]$HttpdList,
        [bool]$CreateBackups
    )
    
    $appliedCount = 0

    # MySQL my.ini
    foreach ($target in $MyIniList | Select-Object -Unique) {
        if (Test-Path $target) {
            if ($CreateBackups) {
                Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
            }
            [void](Update-ConfigDirective $target "^\s*innodb_buffer_pool_size\s*=.*$" "innodb_buffer_pool_size=$($Params.innodb_buffer_pool_size)")
            [void](Update-ConfigDirective $target "^\s*innodb_buffer_pool_instances\s*=.*$" "innodb_buffer_pool_instances=$($Params.innodb_buffer_pool_instances)")
            [void](Update-ConfigDirective $target "^\s*innodb_redo_log_capacity\s*=.*$" "innodb_redo_log_capacity=$($Params.innodb_redo_log_capacity)")
            [void](Update-ConfigDirective $target "^\s*innodb_io_capacity\s*=.*$" "innodb_io_capacity=$($Params.innodb_io_capacity)")
            [void](Update-ConfigDirective $target "^\s*innodb_io_capacity_max\s*=.*$" "innodb_io_capacity_max=$($Params.innodb_io_capacity_max)")
            [void](Update-ConfigDirective $target "^\s*innodb_flush_neighbors\s*=.*$" "innodb_flush_neighbors=$($Params.innodb_flush_neighbors)")
            Write-Host "   ✔ Tuned [my.ini] (BOM-Free UTF-8): $target" -ForegroundColor Green
            $appliedCount++
        }
    }

    # PHP php.ini
    foreach ($target in $PhpIniList | Select-Object -Unique) {
        if (Test-Path $target) {
            if ($CreateBackups) {
                Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
            }
            [void](Update-ConfigDirective $target "^\s*memory_limit\s*=.*$" "memory_limit = $($Params.memory_limit)")
            Write-Host "   ✔ Tuned [php.ini] (BOM-Free UTF-8): $target" -ForegroundColor Green
            $appliedCount++
        }
    }

    # Apache httpd.conf
    foreach ($target in $HttpdList | Select-Object -Unique) {
        if (Test-Path $target) {
            if ($CreateBackups) {
                Copy-Item $target "$target.backup_tuning" -Force -ErrorAction SilentlyContinue
            }
            [void](Update-ConfigDirective $target "^\s*ThreadsPerChild\s+.*$" "    ThreadsPerChild $($Params.ThreadsPerChild)")
            Write-Host "   ✔ Tuned [httpd.conf] (BOM-Free UTF-8): $target" -ForegroundColor Green
            $appliedCount++
        }
    }

    return $appliedCount
}

# ----------------------------------------------------------------------------
# 5. SERVICE RECOVERY & SYNCHRONIZATION
# ----------------------------------------------------------------------------
function Sync-WindowsServices {
    param($poolSize, $apacheThreads)
    
    Write-Host ""
    Write-Host "--- SYNCHRONIZING & VERIFYING WINDOWS SERVICES ---" -ForegroundColor Yellow

    # MySQL
    $mysql = Get-Service -Name "MySQL97", "MySQL84", "MySQL80", "MySQL", "MariaDB" -ErrorAction SilentlyContinue | Select-Object -First 1
    if ($mysql) {
        Write-Host " - Managing $($mysql.Name) database engine..." -ForegroundColor Cyan
        try {
            if ($mysql.Status -eq "Running") {
                Write-Host "   Stopping $($mysql.Name) to flush dirty buffers..." -ForegroundColor DarkGray
                Stop-Service -Name $mysql.Name -Force -ErrorAction Stop
                Start-Sleep -Seconds 2
            }
            Write-Host "   Starting $($mysql.Name) with high-throughput allocation..." -ForegroundColor DarkGray
            Start-Service -Name $mysql.Name -ErrorAction Stop
            $mysql.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(15))
            Write-Host "   ✔ [SUCCESS] $($mysql.Name) is active and RUNNING ($poolSize InnoDB Buffer Pool)." -ForegroundColor Green
        } catch {
            Write-Host "   ✖ [ERROR] Failed to start $($mysql.Name): $($_.Exception.Message)" -ForegroundColor Red
        }
    } else {
        Write-Host "   [INFO] No active MySQL service installed." -ForegroundColor DarkGray
    }

    # Apache
    $apache = Get-Service -Name "Apache2.4", "SizarPOS_Engine" -ErrorAction SilentlyContinue | Select-Object -First 1
    if ($apache) {
        Write-Host " - Managing $($apache.Name) web server..." -ForegroundColor Cyan
        try {
            if ($apache.Status -eq "Running") {
                Restart-Service -Name $apache.Name -Force -ErrorAction Stop
            } else {
                Start-Service -Name $apache.Name -ErrorAction Stop
            }
            $apache.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(10))
            Write-Host "   ✔ [SUCCESS] $($apache.Name) is active and RUNNING ($apacheThreads worker threads)." -ForegroundColor Green
        } catch {
            Write-Host "   ✖ [ERROR] Failed to start $($apache.Name): $($_.Exception.Message)" -ForegroundColor Red
        }
    } else {
        Write-Host "   [INFO] No active Apache service installed." -ForegroundColor DarkGray
    }
}

# ----------------------------------------------------------------------------
# 6. ROLLBACK RESTORATION
# ----------------------------------------------------------------------------
function Restore-ConfigurationBackups {
    Write-Host ""
    Write-Host "--- RESTORING PREVIOUS CONFIGURATION BACKUPS ---" -ForegroundColor Yellow
    
    $restoredCount = 0
    $targets = @(
        "C:\ProgramData\MySQL\MySQL Server 9.7\my.ini",
        "C:\ProgramData\MySQL\MySQL Server 8.4\my.ini",
        "C:\ProgramData\MySQL\MySQL Server 8.0\my.ini",
        "C:\php\php.ini",
        "C:\Apache24\conf\httpd.conf"
    )

    foreach ($target in $targets) {
        $backup = "$target.backup_tuning"
        if (-not (Test-Path $backup)) { $backup = "$target.bak" }
        
        if (Test-Path $backup) {
            try {
                Copy-Item $backup $target -Force
                Write-Host "   ✔ Restored: $($target) from backup" -ForegroundColor Green
                $restoredCount++
            } catch {
                Write-Host "   ✖ Failed to restore $($target): $($_.Exception.Message)" -ForegroundColor Red
            }
        }
    }

    if ($restoredCount -gt 0) {
        Write-Host "   Restored $restoredCount files. Restarting services..." -ForegroundColor Cyan
        Sync-WindowsServices "Default" "Default"
    } else {
        Write-Host "   [INFO] No backup files (.backup_tuning / .bak) found to restore." -ForegroundColor Yellow
    }
}

# ----------------------------------------------------------------------------
# MAIN EXECUTION CONTROLLER
# ----------------------------------------------------------------------------
$isAdmin = Test-IsAdmin
Show-Header $isAdmin

$scriptRoot = Split-Path -Parent $MyInvocation.MyCommand.Definition
if (-not $scriptRoot) { $scriptRoot = [System.AppDomain]::CurrentDomain.BaseDirectory }

$hw = Get-HardwareIntelligence
$params = Get-OptimalParameters $hw

Show-Header $isAdmin
Show-IntelligenceReport $hw $params

# Paths Definition
$repoMyIni = @((Join-Path $scriptRoot "..\server-configs\my.ini"), (Join-Path $scriptRoot "my.ini"))
$repoPhpIni = @((Join-Path $scriptRoot "..\server-configs\php.ini"))
$repoHttpd = @((Join-Path $scriptRoot "..\server-configs\httpd.conf"))

$systemMyIni = @(
    "C:\ProgramData\MySQL\MySQL Server 9.7\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.4\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.0\my.ini"
)
$systemPhpIni = @("C:\php\php.ini", "C:\ProgramData\PosEngine\php\php.ini")
$systemHttpd = @("C:\Apache24\conf\httpd.conf", "C:\ProgramData\PosEngine\server\conf\httpd.conf")

# Interactive Menu Loop
$running = $true

while ($running) {
    Write-Host "┌──────────────────────────────────────────────────────────────────────┐" -ForegroundColor White
    Write-Host "│ SELECT AN ACTION:                                                    │" -ForegroundColor White
    Write-Host "├──────────────────────────────────────────────────────────────────────┤" -ForegroundColor White
    Write-Host "│ [1] Auto-Calibrate Config Files ONLY (Workspace Template Mode)       │" -ForegroundColor Cyan
    Write-Host "│     - Updates extra\server-configs\ files based on detected hardware. │" -ForegroundColor Gray
    Write-Host "│     - ZERO impact on live active services or system directories.     │" -ForegroundColor Gray
    Write-Host "│                                                                      │" -ForegroundColor White
    Write-Host "│ [2] Manual / Custom Parameter Tuning (Review & Override)             │" -ForegroundColor Yellow
    Write-Host "│     - Manually set InnoDB pool size, PHP memory, Apache threads.     │" -ForegroundColor Gray
    Write-Host "│     - Choose whether to save to workspace files or inject to system. │" -ForegroundColor Gray
    Write-Host "│                                                                      │" -ForegroundColor White
    Write-Host "│ [3] Full Live System Injection & Service Sync (Requires Admin)       │" -ForegroundColor Green
    Write-Host "│     - Injects BOM-Free tuned directives into MySQL, PHP, and Apache. │" -ForegroundColor Gray
    Write-Host "│     - Automatically creates backups and restarts active services.    │" -ForegroundColor Gray
    Write-Host "│                                                                      │" -ForegroundColor White
    Write-Host "│ [4] Rollback to Previous Configuration Backups                       │" -ForegroundColor Magenta
    Write-Host "│     - Restores original .bak / .backup_tuning configuration files.   │" -ForegroundColor Gray
    Write-Host "│                                                                      │" -ForegroundColor White
    Write-Host "│ [5] Quick Live Services Health & Port Check                          │" -ForegroundColor Cyan
    Write-Host "│                                                                      │" -ForegroundColor White
    Write-Host "│ [6] Exit (Do Nothing)                                                │" -ForegroundColor Red
    Write-Host "└──────────────────────────────────────────────────────────────────────┘" -ForegroundColor White
    Write-Host ""
    
    $choice = Read-Host " Enter choice [1-6]"
    
    switch ($choice) {
        "1" {
            Write-Host ""
            Write-Host "[ACTION 1] Calibrating Workspace Configuration Files..." -ForegroundColor Cyan
            $c = Apply-TuningParameters $params $repoMyIni $repoPhpIni $repoHttpd $false
            Write-Host ""
            Write-Host "✔ Successfully calibrated $c workspace configuration templates!" -ForegroundColor Green
            Write-Host "  Files updated in extra\server-configs\ with BOM-Free UTF-8 encoding." -ForegroundColor Gray
            Write-Host ""
        }

        "2" {
            Write-Host ""
            Write-Host "[ACTION 2] Custom Parameter Configuration" -ForegroundColor Yellow
            Write-Host "Press ENTER on any parameter to accept the detected recommendation." -ForegroundColor Gray
            Write-Host ""
            
            $customPool = Read-Host " InnoDB Buffer Pool Size (e.g. 2G, 4G, 7G) [Default: $($params.innodb_buffer_pool_size)]"
            if ([string]::IsNullOrWhiteSpace($customPool)) { $customPool = $params.innodb_buffer_pool_size }

            $customInstances = Read-Host " InnoDB Buffer Pool Instances (e.g. 1, 4, 8) [Default: $($params.innodb_buffer_pool_instances)]"
            if ([string]::IsNullOrWhiteSpace($customInstances)) { $customInstances = $params.innodb_buffer_pool_instances }

            $customRedo = Read-Host " InnoDB Redo Log Capacity (e.g. 512M, 1G, 2G) [Default: $($params.innodb_redo_log_capacity)]"
            if ([string]::IsNullOrWhiteSpace($customRedo)) { $customRedo = $params.innodb_redo_log_capacity }

            $customPhp = Read-Host " PHP memory_limit (e.g. 512M, 1024M, 2048M) [Default: $($params.memory_limit)]"
            if ([string]::IsNullOrWhiteSpace($customPhp)) { $customPhp = $params.memory_limit }

            $customThreads = Read-Host " Apache ThreadsPerChild (e.g. 64, 100, 150) [Default: $($params.ThreadsPerChild)]"
            if ([string]::IsNullOrWhiteSpace($customThreads)) { $customThreads = $params.ThreadsPerChild }

            $activeParams = [ordered]@{
                innodb_buffer_pool_size      = $customPool
                innodb_buffer_pool_instances = $customInstances
                innodb_redo_log_capacity     = $customRedo
                innodb_io_capacity           = $params.innodb_io_capacity
                innodb_io_capacity_max       = $params.innodb_io_capacity_max
                innodb_flush_neighbors       = $params.innodb_flush_neighbors
                memory_limit                 = $customPhp
                ThreadsPerChild              = $customThreads
            }

            Write-Host ""
            Write-Host "Where would you like to apply these custom parameters?" -ForegroundColor Yellow
            Write-Host " [A] Workspace files only (extra\server-configs\)" -ForegroundColor Cyan
            Write-Host " [B] Inject directly into live system (Requires Admin)" -ForegroundColor Green
            Write-Host " [C] Cancel" -ForegroundColor Red
            $subChoice = Read-Host " Select target [A/B/C]"
            
            if ($subChoice -eq "A" -or $subChoice -eq "a") {
                $c = Apply-TuningParameters $activeParams $repoMyIni $repoPhpIni $repoHttpd $false
                Write-Host "✔ Applied custom tuning to $c workspace files." -ForegroundColor Green
            } elseif ($subChoice -eq "B" -or $subChoice -eq "b") {
                if (-not $isAdmin) {
                    Write-Host "✖ Administrative elevation required for live system injection." -ForegroundColor Red
                } else {
                    $c = Apply-TuningParameters $activeParams $systemMyIni $systemPhpIni $systemHttpd $true
                    Sync-WindowsServices $customPool $customThreads
                    Write-Host "✔ Injected custom parameters and synchronized services!" -ForegroundColor Green
                }
            } else {
                Write-Host "Cancelled custom parameter application." -ForegroundColor Gray
            }
            Write-Host ""
        }

        "3" {
            Write-Host ""
            Write-Host "[ACTION 3] Full Enterprise System Injection & Service Sync" -ForegroundColor Green
            if (-not $isAdmin) {
                Write-Host "✖ Error: Live system injection requires Administrative privileges." -ForegroundColor Red
                Write-Host "  Please launch Calibrate_Server_Hardware_Performance.bat as Administrator." -ForegroundColor Yellow
            } else {
                Write-Host "Applying tuned directives to active system configurations..." -ForegroundColor Cyan
                $allMyIni = $systemMyIni + $repoMyIni
                $allPhpIni = $systemPhpIni + $repoPhpIni
                $allHttpd = $systemHttpd + $repoHttpd

                $c = Apply-TuningParameters $params $allMyIni $allPhpIni $allHttpd $true
                Write-Host "✔ Injected calibrated parameters into $c configuration files." -ForegroundColor Green
                
                Sync-WindowsServices $params.innodb_buffer_pool_size $params.ThreadsPerChild
                Write-Host ""
                Write-Host "✔ Enterprise Calibration and Service Synchronization Complete!" -ForegroundColor Green
            }
            Write-Host ""
        }

        "4" {
            if (-not $isAdmin) {
                Write-Host "✖ Administrative privileges required to restore system backups." -ForegroundColor Red
            } else {
                Restore-ConfigurationBackups
            }
            Write-Host ""
        }

        "5" {
            Write-Host ""
            Write-Host "--- LIVE SERVICES HEALTH CHECK ---" -ForegroundColor Cyan
            Get-Service -Name "Apache2.4", "MySQL97", "MySQL84", "MySQL80", "MySQL", "MariaDB" -ErrorAction SilentlyContinue | Format-Table -Property Name, Status, DisplayName
            
            # Port check
            Write-Host "Checking Listening Ports (3306 for MySQL, 80 for Apache):" -ForegroundColor DarkGray
            $p3306 = Get-NetTCPConnection -LocalPort 3306 -State Listen -ErrorAction SilentlyContinue
            $p80 = Get-NetTCPConnection -LocalPort 80 -State Listen -ErrorAction SilentlyContinue
            
            if ($p3306) { Write-Host "   ✔ Port 3306 (MySQL): LISTENING" -ForegroundColor Green } else { Write-Host "   ✖ Port 3306 (MySQL): NOT LISTENING" -ForegroundColor Red }
            if ($p80) { Write-Host "   ✔ Port 80 (Apache):   LISTENING" -ForegroundColor Green } else { Write-Host "   ✖ Port 80 (Apache):   NOT LISTENING" -ForegroundColor Red }
            Write-Host ""
        }

        "6" {
            Write-Host "Exiting without making further changes. Goodbye!" -ForegroundColor Gray
            $running = $false
        }

        default {
            Write-Host "Invalid option. Please enter a number between 1 and 6." -ForegroundColor Yellow
        }
    }

    if ($running -and $choice -ne "6") {
        Write-Host "Press ENTER to return to menu..." -ForegroundColor DarkGray
        $null = Read-Host
        Show-Header $isAdmin
        Show-IntelligenceReport $hw $params
    }
}
