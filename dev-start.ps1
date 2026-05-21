# Local dev launcher for the "rules" plugin.
# Usage from PowerShell:
#   .\dev-start.ps1
# Press Ctrl+C in this window to stop the server.

$php = "$env:LOCALAPPDATA\Microsoft\WinGet\Packages\PHP.PHP.8.4_Microsoft.Winget.Source_8wekyb3d8bbwe\php.exe"
if (-not (Test-Path $php)) {
    Write-Error "PHP 8.4 not found at $php. Install it with: winget install --id PHP.PHP.8.4"
    exit 1
}

$root  = Join-Path $PSScriptRoot "rules"
$entry = Join-Path $root        "pages\rules.php"

Write-Host ""
Write-Host "Starting PHP dev server..." -ForegroundColor Cyan
Write-Host "  URL:  http://localhost:8765/"           -ForegroundColor Yellow
Write-Host "  Stop: Ctrl+C"                            -ForegroundColor Yellow
Write-Host ""
Write-Host "Use the dev toolbar at the top of the page to switch language" -ForegroundColor DarkGray
Write-Host "(en/fr). Any language other than fr falls back to French with" -ForegroundColor DarkGray
Write-Host "a small bilingual notice." -ForegroundColor DarkGray
Write-Host ""

Start-Process "http://localhost:8765/"

& $php -S localhost:8765 -t $root $entry
