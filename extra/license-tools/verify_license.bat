@echo off
chcp 65001 >nul
setlocal enabledelayedexpansion
title SizarDev - License Inspector and Verifier
color 0A

cd /d "%~dp0"

:: Detect PHP executable
set "PHP_BIN="
where php >nul 2>&1
if %ERRORLEVEL% equ 0 (
    set "PHP_BIN=php"
) else if exist "C:\Apache24\php\php.exe" (
    set "PHP_BIN=C:\Apache24\php\php.exe"
) else if exist "C:\php\php.exe" (
    set "PHP_BIN=C:\php\php.exe"
) else if exist "C:\xampp\php\php.exe" (
    set "PHP_BIN=C:\xampp\php\php.exe"
) else if exist "..\..\SizarDev-Pos\bin\php\php.exe" (
    set "PHP_BIN=..\..\SizarDev-Pos\bin\php\php.exe"
) else if exist "..\backend\bin\php\php.exe" (
    set "PHP_BIN=..\backend\bin\php\php.exe"
)

if "%PHP_BIN%"=="" (
    color 0C
    echo [ERROR] PHP was not found in your Windows PATH or standard locations.
    echo Please install PHP or add PHP to your Windows environment PATH.
    echo.
    pause
    exit /b 1
)

:: If a file was dragged and dropped directly onto the bat file icon
if not "%~1"=="" (
    "%PHP_BIN%" generate_license.php --verify="%~1"
    echo.
    echo Press any key to exit...
    pause >nul
    exit /b 0
)

:prompt_loop
cls
echo.
echo ======================================================================
echo              SIZAR POS PRO - CRYPTOGRAPHIC LICENSE VERIFIER          
echo                         Developer: SizarDev                           
echo ======================================================================
echo.
echo   Drag and drop any license JSON file into this window,
echo   or paste the full file path, then press Enter:
echo.
echo   [Tip: Press Enter directly to inspect active POS license]
echo   [Type 0 and press Enter to Exit]
echo.
echo ======================================================================
set "TARGET_PATH="
set /p "TARGET_PATH=License File Path > "

if "%TARGET_PATH%"=="0" exit /b 0

if "%TARGET_PATH%"=="" (
    set "TARGET_PATH=..\..\SizarDev-Pos\config\license.json"
)

:: Strip surrounding quotes from dragged paths
set "TARGET_PATH=!TARGET_PATH:"=!"

cls
"%PHP_BIN%" generate_license.php --verify="!TARGET_PATH!"
echo.
echo ======================================================================
echo Press any key to verify another license file...
pause >nul
goto prompt_loop
