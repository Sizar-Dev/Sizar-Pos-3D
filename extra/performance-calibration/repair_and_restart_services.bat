@echo off
chcp 65001 >nul
setlocal enabledelayedexpansion
title Sizar POS - Services Repair & Restarter

:: Check for Administrative Elevation
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo [INFO] Requesting Administrative Elevation to restore MySQL and Apache...
    powershell -Command "Start-Process '%~dpnx0' -Verb RunAs"
    exit /b
)

powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0repair_and_restart_services.ps1"

echo.
echo Press any key to exit...
pause >nul
exit /b 0
