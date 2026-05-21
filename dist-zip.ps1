# Builds a deployable ZIP for the "rules" plugin.
# Usage from PowerShell:
#   .\dist-zip.ps1
# Output: dist\rules-{version}.zip — ready to upload via Admin → Plugins.

$ErrorActionPreference = 'Stop'

$src = Join-Path $PSScriptRoot 'rules'
if (-not (Test-Path $src)) {
    Write-Error "Plugin directory not found: $src"
    exit 1
}

# Read id and version from the manifest
$manifestPath = Join-Path $src 'plugin.json'
$manifest = Get-Content $manifestPath -Raw -Encoding UTF8 | ConvertFrom-Json
$id      = $manifest.id
$version = $manifest.version

if (-not $id -or -not $version) {
    Write-Error "plugin.json must declare 'id' and 'version'."
    exit 1
}

# Paths
$dist    = Join-Path $PSScriptRoot 'dist'
$staging = Join-Path $dist '_staging'
$pkgDir  = Join-Path $staging $id
$zipPath = Join-Path $dist ("{0}-{1}.zip" -f $id, $version)

# Clean previous artefacts
if (Test-Path $staging) { Remove-Item -Recurse -Force $staging }
if (Test-Path $zipPath) { Remove-Item -Force $zipPath }
New-Item -ItemType Directory -Path $pkgDir -Force | Out-Null

# Files to exclude — dev tools + OS clutter (matches altered.re/plugins doc)
$excludeNames = @('inc_dev.php', '.DS_Store', 'Thumbs.db')
$excludeDirs  = @('\\__MACOSX\\', '\\\.git\\', '\\\.svn\\')

$files = Get-ChildItem -Path $src -Recurse -File | Where-Object {
    if ($excludeNames -contains $_.Name) { return $false }
    foreach ($pat in $excludeDirs) { if ($_.FullName -match $pat) { return $false } }
    return $true
}

# Copy preserving relative structure
foreach ($f in $files) {
    $rel = $f.FullName.Substring($src.Length + 1)
    $dst = Join-Path $pkgDir $rel
    New-Item -ItemType Directory -Path (Split-Path $dst) -Force | Out-Null
    Copy-Item -Path $f.FullName -Destination $dst
}

# Zip the staged plugin directory (top-level "{id}/" inside the ZIP)
Compress-Archive -Path $pkgDir -DestinationPath $zipPath -Force

# Clean staging
Remove-Item -Recurse -Force $staging

# Summary
$size = (Get-Item $zipPath).Length
Write-Host ""
Write-Host "Built $zipPath" -ForegroundColor Green
Write-Host ("  Size: {0:N0} bytes ({1:N1} KB)" -f $size, ($size / 1KB)) -ForegroundColor DarkGray
Write-Host ""
Write-Host "Contents:" -ForegroundColor Yellow
Add-Type -AssemblyName System.IO.Compression.FileSystem
$zip = [System.IO.Compression.ZipFile]::OpenRead($zipPath)
try {
    $zip.Entries | Sort-Object FullName | ForEach-Object {
        Write-Host ("  {0,10:N0}  {1}" -f $_.Length, $_.FullName) -ForegroundColor DarkGray
    }
} finally {
    $zip.Dispose()
}
Write-Host ""
Write-Host "Upload via Admin -> Plugins -> Install plugin on altered.re." -ForegroundColor Cyan
