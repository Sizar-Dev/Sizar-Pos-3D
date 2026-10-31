@echo off
chcp 65001 >nul
setlocal enabledelayedexpansion
title Sizar POS Pro - Hardware Intelligence and Performance Calibrator

:: Check if already elevated
net session >nul 2>&1
if %errorLevel% equ 0 (
    goto :RUN_ENGINE
)

:: If parameter 'standard' passed, skip elevation request
if "%~1"=="standard" (
    goto :RUN_ENGINE
)

:: Request Administrative Elevation
echo ====================================================================
echo  Sizar POS Pro - Hardware Intelligence and Performance Calibrator
echo  Developer: SizarDev ^| Oran, Algeria
echo ====================================================================
echo.
echo [INFO] Requesting Administrative Elevation for Full System Access...
powershell -Command "Start-Process '%~dpnx0' -ArgumentList 'elevated' -Verb RunAs" >nul 2>&1
if %errorLevel% equ 0 (
    exit /b 0
)

echo.
echo [NOTICE] Elevation was not granted. Proceeding in Standard User Mode...
echo         (Options 1 and 2-A are available; live system injection requires Admin)
timeout /t 2 >nul

:RUN_ENGINE
powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0Calibrate_Server_Hardware_Performance.ps1"

exit /b 0
