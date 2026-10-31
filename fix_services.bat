@echo off
chcp 65001 >nul
title Sizar POS Pro - Restore MySQL & Apache Services
cd /d "%~dp0"
call "extra\performance-calibration\repair_and_restart_services.bat"
