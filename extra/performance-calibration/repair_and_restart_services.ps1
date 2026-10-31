# ============================================================================
# Sizar POS Pro - Windows Services Repair & Quick Recovery Engine
# Developer: SizarDev | Oran, Algeria
# Purpose: Strips invalid UTF-8 BOM from my.ini/php.ini/httpd.conf and restores services
# ============================================================================

$utf8NoBom = New-Object System.Text.UTF8Encoding($false)

Write-Host "====================================================================" -ForegroundColor Cyan
Write-Host " SIZAR POS PRO - SERVICES RECOVERY & CONFIGURATION NORMALIZER       " -ForegroundColor Cyan
Write-Host "====================================================================" -ForegroundColor Cyan
Write-Host ""

# 1. Clean BOM from MySQL Configurations
$targets = @(
    "C:\ProgramData\MySQL\MySQL Server 9.7\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.4\my.ini",
    "C:\ProgramData\MySQL\MySQL Server 8.0\my.ini",
    "C:\php\php.ini",
    "C:\Apache24\conf\httpd.conf"
)

Write-Host "[1/3] Normalizing Configuration Encodings (Removing UTF-8 BOM)..." -ForegroundColor Yellow
foreach ($target in $targets) {
    if (Test-Path $target) {
        try {
            $content = [System.IO.File]::ReadAllText($target)
            [System.IO.File]::WriteAllText($target, $content, $utf8NoBom)
            Write-Host "   [CLEANED] $target (BOM-Free UTF-8)" -ForegroundColor Green
        } catch {
            Write-Host "   [ERROR] Failed to write to $target: $($_.Exception.Message)" -ForegroundColor Red
        }
    }
}

Write-Host ""
Write-Host "[2/3] Restoring and Starting MySQL Database Service..." -ForegroundColor Yellow
$mysql = Get-Service -Name "MySQL97", "MySQL84", "MySQL80", "MySQL", "MariaDB" -ErrorAction SilentlyContinue | Select-Object -First 1
if ($mysql) {
    Write-Host "   - Found MySQL service: $($mysql.Name) (Current Status: $($mysql.Status))" -ForegroundColor Cyan
    try {
        if ($mysql.Status -eq "Running") {
            Stop-Service -Name $mysql.Name -Force -ErrorAction Stop
            Start-Sleep -Seconds 2
        }
        Start-Service -Name $mysql.Name -ErrorAction Stop
        $mysql.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(15))
        Write-Host "   [SUCCESS] $($mysql.Name) is now RUNNING!" -ForegroundColor Green
    } catch {
        Write-Host "   [ERROR] Failed to start $($mysql.Name): $($_.Exception.Message)" -ForegroundColor Red
    }
} else {
    Write-Host "   [WARNING] No MySQL service detected." -ForegroundColor Yellow
}

Write-Host ""
Write-Host "[3/3] Verifying and Starting Apache Web Server..." -ForegroundColor Yellow
$apache = Get-Service -Name "Apache2.4", "SizarPOS_Engine" -ErrorAction SilentlyContinue | Select-Object -First 1
if ($apache) {
    Write-Host "   - Found Apache service: $($apache.Name) (Current Status: $($apache.Status))" -ForegroundColor Cyan
    try {
        if ($apache.Status -ne "Running") {
            Start-Service -Name $apache.Name -ErrorAction Stop
        } else {
            Restart-Service -Name $apache.Name -Force -ErrorAction Stop
        }
        $apache.WaitForStatus([System.ServiceProcess.ServiceControllerStatus]::Running, [TimeSpan]::FromSeconds(10))
        Write-Host "   [SUCCESS] $($apache.Name) is now RUNNING!" -ForegroundColor Green
    } catch {
        Write-Host "   [ERROR] Failed to start $($apache.Name): $($_.Exception.Message)" -ForegroundColor Red
    }
} else {
    Write-Host "   [WARNING] No Apache service detected." -ForegroundColor Yellow
}

Write-Host ""
Write-Host "====================================================================" -ForegroundColor Cyan
Write-Host " LIVE VERIFICATION SUMMARY:" -ForegroundColor Cyan
Get-Service -Name "Apache2.4", "MySQL97", "MySQL84", "MySQL80", "MySQL" -ErrorAction SilentlyContinue | Format-Table -Property Name, Status, DisplayName
Write-Host "====================================================================" -ForegroundColor Cyan
