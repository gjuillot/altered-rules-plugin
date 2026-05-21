<?php
// Standalone-dev only: when BASE_URL isn't defined the page is being served by
// php -S directly (not by altered.re), so load the dev bootstrap. In production
// the site defines BASE_URL before including this file, so this require is skipped.
if (!defined('BASE_URL')) {
    @require_once dirname(__DIR__) . '/inc_dev.php';
}

/**
 * Quick Rules dispatcher.
 *
 * Loads the per-language content partial (rules.{lang}.php) matching the
 * visitor's UI language. Any language without a partial falls back to the
 * French version with a discreet bilingual notice at the top of the page.
 *
 * Adding a new language: drop pages/rules.{lang}.php next to this file.
 * No code change needed here.
 */

$lang     = getUiLang();
$partial  = __DIR__ . "/rules.{$lang}.php";
$fallback = false;

if (!is_file($partial)) {
    $partial  = __DIR__ . '/rules.fr.php';
    $fallback = ($lang !== 'fr');
}

if ($fallback) {
    echo '<div class="rule-callout tip mb-3">'
       . 'Translation pending — showing the French version. '
       . '<em>Traduction en cours — version française affichée.</em>'
       . '</div>';
}

require $partial;
