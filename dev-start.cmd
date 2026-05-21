@echo off
rem Wrapper for dev-start.ps1 that bypasses the PowerShell execution policy.
rem Double-click this file, or run `.\dev-start.cmd` from a terminal.
powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0dev-start.ps1"
