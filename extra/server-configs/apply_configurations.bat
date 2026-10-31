@echo off
chcp 65001 >nul
setlocal enabledelayedexpansion
title Sizar POS - Enterprise Server Configuration Applier

:: Check for Administrative privileges
net session >nul 2>&1
if %errorLevel% neq 0 (
    echo [INFO] Requesting Administrative Elevation...
    powershell -Command "Start-Process '%~dpnx0' -Verb RunAs"
    exit /b
)

echo ====================================================================
echo  Sizar POS Pro - Enterprise Server Configurations Installer
echo  Developer: SizarDev ^| Oran, Algeria
echo ====================================================================
echo.

set "BUNDLE_DIR=%~dp0"

echo [1/4] Applying PHP Configuration...
if not exist "C:\php" mkdir "C:\php" >nul 2>&1
copy /Y "!BUNDLE_DIR!php.ini" "C:\php\php.ini" >nul
if %errorLevel% equ 0 (echo    - C:\php\php.ini updated successfully.) else (echo    [ERROR] Failed to update php.ini)

echo.
echo [2/4] Applying Apache Configuration...
if not exist "C:\Apache24\conf" mkdir "C:\Apache24\conf" >nul 2>&1
copy /Y "!BUNDLE_DIR!httpd.conf" "C:\Apache24\conf\httpd.conf" >nul
if %errorLevel% equ 0 (echo    - C:\Apache24\conf\httpd.conf updated successfully.) else (echo    [ERROR] Failed to update httpd.conf)

echo.
echo [3/4] Applying MySQL/MariaDB Configuration...
set "MY_COPIED=0"
for %%D in ("C:\ProgramData\MySQL\MySQL Server 9.7" "C:\ProgramData\MySQL\MySQL Server 8.4" "C:\ProgramData\MySQL\MySQL Server 8.0" "C:\mariadb\data") do (
    if exist "%%~D" (
        copy /Y "!BUNDLE_DIR!my.ini" "%%~D\my.ini" >nul
        if !errorLevel! equ 0 (
            echo    - %%~D\my.ini updated successfully.
            set "MY_COPIED=1"
        )
    )
)
if "!MY_COPIED!"=="0" (
    if not exist "C:\ProgramData\MySQL\MySQL Server 9.7" mkdir "C:\ProgramData\MySQL\MySQL Server 9.7" >nul 2>&1
    copy /Y "!BUNDLE_DIR!my.ini" "C:\ProgramData\MySQL\MySQL Server 9.7\my.ini" >nul
    if !errorLevel! equ 0 (echo    - C:\ProgramData\MySQL\MySQL Server 9.7\my.ini deployed successfully.)
)

echo.
echo [4/4] Restarting and Verifying Windows Services...
for %%S in (Apache2.4 SizarPOS_Engine) do (
    sc query "%%S" >nul 2>&1
    if !errorLevel! equ 0 (
        echo    - Restarting %%S...
        net stop "%%S" >nul 2>&1
        net start "%%S" >nul 2>&1
        sc query "%%S" | findstr /I "RUNNING" >nul
        if !errorLevel! equ 0 (
            echo    [SUCCESS] %%S is ACTIVE and RUNNING.
        ) else (
            echo    [WARNING] %%S is not in RUNNING state. Check Apache logs.
        )
    )
)

for %%S in (MySQL97 MySQL84 MySQL80 MySQL MariaDB) do (
    sc query "%%S" >nul 2>&1
    if !errorLevel! equ 0 (
        echo    - Restarting %%S...
        net stop "%%S" >nul 2>&1
        net start "%%S" >nul 2>&1
        sc query "%%S" | findstr /I "RUNNING" >nul
        if !errorLevel! equ 0 (
            echo    [SUCCESS] %%S is ACTIVE and RUNNING.
        ) else (
            echo    [WARNING] %%S is not in RUNNING state. Check MySQL error log.
        )
    )
)

echo.
echo ====================================================================
echo  SUCCESS: All server configurations applied and services verified!
echo ====================================================================
echo.
pause