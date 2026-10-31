@echo off
chcp 65001 >nul
:: ============================================================================
:: Sizar POS Pro - Enterprise Hardware Intelligence & Performance Auto-Calibrator
:: Author: SizarDev | Oran, Algeria
:: Platform: Native Windows 10 / Windows 11 (Zero External Dependencies)
:: ============================================================================
setlocal enabledelayedexpansion
title Sizar POS Pro - Hardware Performance Auto-Calibrator

:: Check for Administrative Elevation
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo [INFO] Requesting Administrative Elevation for Hardware Calibration...
    powershell -Command "Start-Process '%~dpnx0' -Verb RunAs"
    exit /b
)

powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0Calibrate_Server_Hardware_Performance.ps1"
if %errorLevel% neq 0 (
    echo.
    echo [ERROR] Calibration encountered an unexpected error.
    pause
    exit /b 1
)

exit /b 0
