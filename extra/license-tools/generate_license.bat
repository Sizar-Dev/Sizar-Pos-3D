@echo off
chcp 65001 >nul
setlocal enabledelayedexpansion
title Sizar POS Pro - Developer Master License Console (SizarDev)
color 0B

cd /d "%~dp0"

:: 1. Detect PHP executable across all potential paths
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
    echo.
    echo [ERROR] PHP was not found in your Windows PATH or standard locations.
    echo Please install PHP or add your PHP directory to Windows PATH.
    echo.
    pause
    exit /b 1
)

:menu
cls
echo.
echo ======================================================================
echo              SIZAR POS PRO - DEVELOPER MASTER LICENSE CONSOLE          
echo                         Developer: SizarDev                            
echo ======================================================================
echo.
echo   [1] Generate New Client License (Interactive Wizard)
echo   [2] Quick Generate from machine_id.txt (Auto-Detect)
echo   [3] Inspect and Verify license.json (Check Validity and Details)
echo   [4] View Issued Licenses Archive (Client History Ledger)
echo   [5] Show This PC Hardware Machine ID
echo   [6] Run Cryptographic Key Pair Self-Test
echo   [0] Exit
echo.
echo ======================================================================
set /p "CHOICE=Select an option [0-6] and press Enter: "

if "%CHOICE%"=="1" goto opt_generate
if "%CHOICE%"=="2" goto opt_auto
if "%CHOICE%"=="3" goto opt_verify
if "%CHOICE%"=="4" goto opt_archive
if "%CHOICE%"=="5" goto opt_machine_id
if "%CHOICE%"=="6" goto opt_selftest
if "%CHOICE%"=="0" goto opt_exit

echo Invalid selection. Please try again.
timeout /t 2 >nul
goto menu

:opt_generate
cls
"%PHP_BIN%" generate_license.php --interactive
echo.
echo Press any key to return to menu...
pause >nul
goto menu

:opt_auto
cls
"%PHP_BIN%" generate_license.php --auto
echo.
echo Press any key to return to menu...
pause >nul
goto menu

:opt_verify
cls
"%PHP_BIN%" generate_license.php --verify
echo.
echo Press any key to return to menu...
pause >nul
goto menu

:opt_archive
cls
"%PHP_BIN%" generate_license.php --list-archive
echo.
echo Press any key to return to menu...
pause >nul
goto menu

:opt_machine_id
cls
echo.
echo Detecting This Computer's Hardware Machine ID...
"%PHP_BIN%" -r "$f = is_file('../../SizarDev-Pos/src/Utils/MachineFingerprint.php') ? '../../SizarDev-Pos/src/Utils/MachineFingerprint.php' : (is_file('../backend/src/Utils/MachineFingerprint.php') ? '../backend/src/Utils/MachineFingerprint.php' : null); if ($f) { require $f; echo PHP_EOL . '  Detected Machine ID: ' . MachineFingerprint::getMachineId(true) . PHP_EOL . PHP_EOL; } else { echo PHP_EOL . '  MachineFingerprint class not found.' . PHP_EOL . PHP_EOL; }"
echo Press any key to return to menu...
pause >nul
goto menu

:opt_selftest
cls
"%PHP_BIN%" generate_license.php --self-test
echo.
echo Press any key to return to menu...
pause >nul
goto menu

:opt_exit
echo.
echo Exiting Developer Console. Goodbye!
timeout /t 1 >nul
exit /b 0
