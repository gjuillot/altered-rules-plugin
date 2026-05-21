<?php
/**
 * Dev bootstrap — include at the top of any plugin page to run it standalone.
 * Usage: php -S localhost:8000 pages/hellopage.php
 *        (add `require_once dirname(__DIR__) . '/inc_dev.php';` as first line)
 *
 * Customised for the "rules" plugin (no MySQL, uses CDN_URL, serves local images):
 *   - static asset router for /plugins/rules/assets/* (this plugin's images),
 *   - /assets/* redirect to altered.re (biome icons, fonts, etc.),
 *   - CDN_URL constant added next to BASE_URL,
 *   - DB connection made non-fatal (this plugin doesn't use $db).
 */

// ── Static asset routing (php -S built-in server) ─────────────────────────────
// Must run before any output, before the DB connection attempt, and before
// register_shutdown_function() is set up — so an early `exit` won't wrap raw
// asset bytes inside the dev toolbar's HTML envelope.
$_dev_path = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH);

if (preg_match('#^/plugins/([a-z0-9_-]+)/assets/(.+)$#', $_dev_path, $_dev_m)) {
    $_dev_file = __DIR__ . '/assets/' . $_dev_m[2];
    if (is_file($_dev_file)) {
        $_dev_ext  = strtolower(pathinfo($_dev_file, PATHINFO_EXTENSION));
        $_dev_mime = [
            'jpg'  => 'image/jpeg', 'jpeg' => 'image/jpeg',
            'png'  => 'image/png',  'webp' => 'image/webp',
            'gif'  => 'image/gif',  'svg'  => 'image/svg+xml',
            'css'  => 'text/css',   'js'   => 'application/javascript',
            'pdf'  => 'application/pdf',
        ][$_dev_ext] ?? 'application/octet-stream';
        header("Content-Type: $_dev_mime");
        readfile($_dev_file);
        exit;
    }
    http_response_code(404);
    echo "Plugin asset not found: $_dev_path";
    exit;
}

if (preg_match('#^/assets/.+$#', $_dev_path)) {
    // Site-hosted assets (biome icons, fonts, etc.) — defer to the real site.
    header('Location: https://altered.re' . $_dev_path, true, 302);
    exit;
}
unset($_dev_path, $_dev_m, $_dev_file, $_dev_ext, $_dev_mime);

// ── DB config ─────────────────────────────────────────────────────────────────
define('DB_HOST', 'localhost');
define('DB_NAME', 'alteredcore');
define('DB_USER', 'root');
define('DB_PASS', '');

// ── Plugin config ─────────────────────────────────────────────────────────────
$_manifest                    = json_decode(file_get_contents(__DIR__ . '/plugin.json'), true);
$DEV_PLUGIN_PREFIX            = $_manifest['table_prefix'] ?? '';
$GLOBALS['_dev_assets']       = $_manifest['assets'] ?? [];
$GLOBALS['_dev_plugin_name']  = $_manifest['name'] ?? '';
$DEV_BASE_URL                 = '';
$DEV_ALTERED_DATA_URL         = 'https://alteredcore.org/data/altered.json';

unset($_manifest);

// ── Default user (editable from toolbar) ──────────────────────────────────────
$DEV_USER = [
    'id'       => 1,
    'sub'      => 'dev-sub-uuid-0000',  // empty string = local account mode
    'username' => 'devuser',
    'email'    => 'dev@example.com',
];

// ── Bootstrap ─────────────────────────────────────────────────────────────────
define('BASE_URL', $DEV_BASE_URL);
// CDN_URL is also injected by the site in production; mirror that here.
if (!defined('CDN_URL')) {
    define('CDN_URL', 'https://cdn.alteredcore.org');
}
$GLOBALS['_ac_current_plugin_prefix'] = $DEV_PLUGIN_PREFIX;
$GLOBALS['_dev_redirected']           = false;

session_start();

// Apply toolbar form values to session
if (isset($_GET['_dev'])) {
    $d = $_GET['_dev'];
    if (isset($d['lang']))                        $_SESSION['_dev']['lang']      = $d['lang'];
    if (isset($d['logged_in']))                   $_SESSION['_dev']['logged_in'] = (bool)(int)$d['logged_in'];
    if (isset($d['user']) && is_array($d['user'])) {
        $u = $d['user'];
        $_SESSION['_dev']['user'] = [
            'id'       => (int)($u['id']       ?? 1),
            'sub'      => trim($u['sub']        ?? ''),
            'username' => trim($u['username']   ?? 'devuser'),
            'email'    => trim($u['email']      ?? 'dev@example.com'),
        ];
    }
    header('Location: ' . strtok($_SERVER['REQUEST_URI'], '?'));
    exit;
}

// Load current dev state from session (defaults: en, logged in)
$DEV_LANG      = $_SESSION['_dev']['lang']      ?? 'en';
$DEV_LOGGED_IN = $_SESSION['_dev']['logged_in'] ?? true;
if (isset($_SESSION['_dev']['user'])) {
    $DEV_USER = array_merge($DEV_USER, $_SESSION['_dev']['user']);
}

if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

// Session vars some plugins read directly
$_SESSION['user_id'] = $DEV_USER['id'];

// ── DB connection ─────────────────────────────────────────────────────────────
try {
    $db = new PDO(
        'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8mb4',
        DB_USER, DB_PASS,
        [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            PDO::ATTR_EMULATE_PREPARES   => false,
        ]
    );
} catch (PDOException $e) {
    // This plugin doesn't use $db. Continue without a connection so the page
    // still renders. Plugins that *do* use $db will fail later on $db->query().
    $db = null;
    error_log('inc_dev.php: DB unavailable (' . $e->getMessage() . '). Continuing without DB.');
}

// ── Injected variables (mirrors what the router provides) ─────────────────────
$isLoggedIn = $DEV_LOGGED_IN;
$_lang      = $DEV_LANG;
$pageTitle  = 'Dev page';

// ── Stub functions ────────────────────────────────────────────────────────────
function h(string $s): string { return htmlspecialchars($s, ENT_QUOTES, 'UTF-8'); }

function qp(string $sql): string {
    $pluginPrefix = $GLOBALS['_ac_current_plugin_prefix'] ?? '';
    $seg = 'plugin_' . ($pluginPrefix !== '' ? $pluginPrefix . '_' : '');
    return preg_replace_callback('/\{([a-z_]+)\}/', function (array $m) use ($seg): string {
        return '`' . $seg . $m[1] . '`';
    }, $sql);
}

function getUiLang(): string      { return $GLOBALS['DEV_LANG'] ?? 'en'; }
function kcIsLoggedIn(): bool     { return (bool)($GLOBALS['DEV_LOGGED_IN'] ?? false); }
function kcUser(): array          { return (array)($GLOBALS['DEV_USER'] ?? []); }

function loginRequired(): void {
    if (!kcIsLoggedIn()) {
        die('<p style="font-family:sans-serif;padding:1rem">Access denied — set <code>$DEV_LOGGED_IN = true</code> in inc_dev.php.</p>');
    }
}

function redirect(string $url): void {
    $GLOBALS['_dev_redirected'] = true;
    ob_end_clean();
    header('Location: ' . $url);
    exit;
}

function flash(string $msg, string $type = 'success'): void {
    $_SESSION['flash'] = ['msg' => $msg, 'type' => $type];
}

function getFlash(): ?array {
    if (!isset($_SESSION['flash'])) return null;
    $f = $_SESSION['flash'];
    unset($_SESSION['flash']);
    return $f;
}

function csrfToken(): string       { return $_SESSION['csrf_token'] ?? ''; }
function csrfValid(?string $t): bool { return $t === ($_SESSION['csrf_token'] ?? null); }

function loadAlteredData(string $name): array {
    static $all = null;
    if ($all === null) {
        $url = $GLOBALS['DEV_ALTERED_DATA_URL'] ?? '';
        if ($url !== '') {
            $raw = @file_get_contents($url);
        } else {
            $file = dirname(dirname(__DIR__)) . '/data/altered.json';
            $raw  = file_exists($file) ? file_get_contents($file) : false;
        }
        if ($raw === false) { $all = []; return []; }
        if (strncmp($raw, "\xEF\xBB\xBF", 3) === 0) $raw = substr($raw, 3);
        $all = json_decode($raw, true) ?? [];
    }
    return isset($all[$name]) ? $all[$name] : [];
}

// ── Dev toolbar (injected before page output) ─────────────────────────────────
ob_start();
register_shutdown_function(function (): void {
    if ($GLOBALS['_dev_redirected']) return;

    $content   = ob_get_clean();
    $lang       = $GLOBALS['DEV_LANG']        ?? 'en';
    $loggedIn   = (bool)($GLOBALS['DEV_LOGGED_IN'] ?? false);
    $user       = (array)($GLOBALS['DEV_USER']     ?? []);
    $pluginName = (string)($GLOBALS['_dev_plugin_name'] ?? '');
    $base       = strtok($_SERVER['REQUEST_URI'] ?? '/', '?');

    $lnk = function (string $label, string $qs, bool $active) use ($base): string {
        $style = $active
            ? 'color:#cdd6f4;font-weight:bold;text-decoration:none'
            : 'color:#6c7086;text-decoration:none';
        return '<a href="' . $base . '?' . $qs . '" style="' . $style . '">' . $label . '</a>';
    };

    $bar  = '<div id="_devbar">';
    $bar .= '<span style="color:#89b4fa;font-weight:bold;margin-right:4px">&#9881; dev</span>';
    if ($pluginName !== '') {
        $bar .= '<span style="color:#a6e3a1;font-weight:bold;margin-right:4px">' . h($pluginName) . '</span>';
    }
    $bar .= '<span style="color:#585b70">|</span>';
    $bar .= $lnk('en', '_dev[lang]=en', $lang === 'en') . ' ';
    $bar .= $lnk('fr', '_dev[lang]=fr', $lang === 'fr');
    $bar .= '<span style="color:#585b70">|</span>';
    $bar .= $loggedIn
        ? $lnk('&#10003; logged in',  '_dev[logged_in]=0', true)
        : $lnk('&#10007; logged out', '_dev[logged_in]=1', false);
    $bar .= '<span style="color:#585b70">|</span>';

    // Editable user panel (click to expand)
    $bar .= '<details style="position:relative;line-height:1">';
    $bar .= '<summary style="cursor:pointer;list-style:none;color:#a6adc8;outline:none">'
          . h($user['username'] ?? '') . ' &lt;' . h($user['email'] ?? '') . '&gt; &#9998;'
          . '</summary>';
    $bar .= '<div style="position:absolute;top:calc(100% + 4px);left:0;z-index:10000;'
          . 'background:#1e1e2e;border:1px solid #45475a;padding:10px;min-width:300px">';
    $bar .= '<form method="get" style="display:grid;grid-template-columns:70px 1fr;gap:5px 8px;align-items:center">';
    $fields = ['sub' => 'Sub', 'username' => 'Username', 'email' => 'Email'];
    foreach ($fields as $k => $label) {
        $bar .= '<label style="color:#6c7086;font-size:11px">' . $label . '</label>';
        $bar .= '<input name="_dev[user][' . $k . ']" value="' . h((string)($user[$k] ?? '')) . '"'
              . ' style="background:#181825;border:1px solid #313244;color:#cdd6f4;'
              . 'padding:2px 5px;font:11px monospace;width:100%;box-sizing:border-box">';
    }
    $bar .= '<div></div><button type="submit"'
          . ' style="background:#313244;color:#cdd6f4;border:none;padding:3px 10px;'
          . 'cursor:pointer;font:11px monospace;justify-self:start">Save</button>';
    $bar .= '</form></div></details>';

    $bar .= '<span style="color:#585b70">|</span>';
    $bar .= '<a href="' . $base . '" style="color:#a6e3a1;text-decoration:none">&#8635; reload</a>';
    $bar .= '</div>';

    // Inline plugin CSS and JS from plugin.json assets (avoids static-file-serving issues)
    $pluginCss = '';
    foreach ((array)($GLOBALS['_dev_assets']['css'] ?? []) as $_f) {
        $_p = __DIR__ . '/' . $_f;
        if (file_exists($_p)) $pluginCss .= '<style>' . file_get_contents($_p) . '</style>';
    }
    $pluginJs = '';
    foreach ((array)($GLOBALS['_dev_assets']['js'] ?? []) as $_f) {
        $_p = __DIR__ . '/' . $_f;
        if (file_exists($_p)) $pluginJs .= '<script>' . file_get_contents($_p) . '</script>';
    }

    echo '<!DOCTYPE html><html lang="' . h($lang) . '"><head>'
       . '<meta charset="UTF-8">'
       . '<meta name="viewport" content="width=device-width,initial-scale=1">'
       . '<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">'
       . '<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">'
       . '<style>'
       // Site CSS variables (light theme)
       . ':root{'
       . '--sand-50:#FDFBF6;--sand-100:#FAF5E8;--sand-200:#EDE3CC;--sand-300:#DDD0B3;'
       . '--primary-300:#D4AF6B;--primary-400:#C9A84C;--primary-500:#B8952F;'
       . '--neutral-800:#2C2416;--neutral-700:#3D3226;--neutral-600:#534B40;'
       . '--neutral-500:#6B6257;--neutral-400:#8A7D6A;--neutral-200:#D6CFC4;--neutral-100:#EDE8E2;'
       . '}'
       // Base
       . 'body{margin:0;padding-top:36px;background-color:var(--sand-100);color:var(--neutral-800);'
       . 'font-family:"Segoe UI",system-ui,-apple-system,sans-serif}'
       // Section title
       . '.section-title{font-size:1.5rem;font-weight:800;color:var(--neutral-800);margin:0 0 1.5rem}'
       . '.section-title span{display:inline-block;border-bottom:3px solid var(--primary-400);padding-bottom:.1rem}'
       // Cards
       . '.card-altered{background:var(--sand-50);border:2px solid var(--sand-200);border-radius:.75rem}'
       . '.card-altered .card-header{background:var(--sand-200);border-bottom:2px solid var(--sand-300);'
       . 'border-radius:.6rem .6rem 0 0;font-weight:700}'
       // Admin header bar
       . '.admin-header-bar{display:flex;align-items:center;justify-content:space-between;'
       . 'margin-bottom:1.75rem;flex-wrap:wrap;gap:.75rem}'
       . '.admin-header-bar h1{font-size:1.5rem;font-weight:800;color:var(--neutral-800);margin:0}'
       // Buttons
       . '.btn-primary-altered{background:var(--primary-400);border:2px solid var(--primary-500);'
       . 'color:var(--neutral-800);font-weight:700;border-radius:.5rem;transition:background .15s}'
       . '.btn-primary-altered:hover{background:var(--primary-500);color:var(--neutral-800);border-color:var(--primary-500)}'
       // Forms
       . '.form-label{font-weight:600;color:var(--neutral-700);font-size:.9rem}'
       . '.form-control:focus,.form-select:focus{border-color:var(--primary-400);'
       . 'box-shadow:0 0 0 .2rem rgba(201,168,76,.25)}'
       // Tables
       . '.table-altered th{background:var(--sand-200);color:var(--neutral-700);font-size:.8rem;'
       . 'text-transform:uppercase;letter-spacing:.04em;font-weight:700}'
       . '.table-altered td{vertical-align:middle}'
       . '.table-altered tr:hover td{background:rgba(201,168,76,.07)}'
       // Dev toolbar
       . '#_devbar{position:fixed;top:0;left:0;right:0;z-index:9999;background:#1e1e2e;'
       . 'color:#cdd6f4;padding:0 14px;height:36px;font:12px/36px monospace;'
       . 'display:flex;align-items:center;gap:10px;border-bottom:1px solid #313244}'
       . '</style>'
       . $pluginCss
       . '</head><body>'
       . $bar
       . $content
       . '<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>'
       . $pluginJs
       . '</body></html>';
});