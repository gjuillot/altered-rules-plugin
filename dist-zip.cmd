@echo off
rem Wrapper for dist-zip.ps1 that bypasses the PowerShell execution policy.
rem Double-click this file, or run `.\dist-zip.cmd` from a terminal.
powershell.exe -NoProfile -ExecutionPolicy Bypass -File "%~dp0dist-zip.ps1"
