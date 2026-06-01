# Altered TCG Quick Rules — altered.re plugin

An **altered.re plugin** that serves the *Altered TCG Quick Rules v3.0* as a multi-language, richly illustrated reference page. Installable via **Admin → Plugins** on the host site.

Live URL: `https://altered.re/pages/rules`

---

## What it is

An expanded transcription of the official *"Altered TCG — Quick Rules 3.0"* booklet (Equinox, 2025), structured as a navigable single-page reference with:

- Sticky sidebar table of contents (desktop) and collapsible mobile ToC
- Illustrated setup diagram, playmat zone map, card anatomy, Dusk example, and phase overview
- Full keyword glossary (Sets 1–5)
- Download link to the complete rulebook PDF (v5.0)

---

## Languages

| Code | File | Status |
|------|------|--------|
| `fr` | `rules/pages/rules.fr.php` | French — reference source for all translations |
| `en` | `rules/pages/rules.en.php` | English |

The dispatcher (`pages/rules.php`) looks for `pages/rules.{getUiLang()}.php`, includes it if present, and falls back to English with a bilingual notice ("Translation pending — Traduction en cours").

**Adding a new language:** copy `rules.fr.php` → `rules.{lang}.php`, translate prose and visible text, swap card-image URLs (`/cards/fr/…` → `/cards/{lang}/…`), and you're done — no manifest change needed.

---

## Plugin structure

```
rules/
├── plugin.json                    ← manifest (id "rules", slug "rules", version)
├── pages/
│   ├── rules.php                  ← language dispatcher (fallback to EN)
│   ├── rules.fr.php               ← French content (reference source)
│   ├── rules.en.php               ← English content
│   └── rules.{lang}.php           ← future translations (drop-in)
└── assets/
    ├── style.css                  ← plugin-specific styles
    ├── KA_ARKASTER.jpg            ← playmat artwork (bottom layer of the composite)
    ├── zones-layout-fr.png        ← transparent playmat zone overlay (French labels)
    ├── zones-layout-en.png        ← transparent playmat zone overlay (English labels)
    ├── F.webp                     ← Forest biome icon
    ├── M.webp                     ← Mountain biome icon
    ├── O.webp                     ← Water biome icon
    └── Altered_Complete_Rules_5.0.pdf  ← complete rulebook (EN only)
```

Per-language partials output **body content only** — no `<html>`, `<head>`, `<body>`, or outer wrapper. The site injects header/footer and its own container.

External dependencies (Bootstrap 5.3.3, Font Awesome 6.5.1, Altered Icons font, Azure theme) are loaded globally by the site — the plugin does not include them.

---

## Local development

### Prerequisites

**PHP 8.4** (no admin required on Windows):

```powershell
winget install --id PHP.PHP.8.4 --scope user --accept-package-agreements --accept-source-agreements
```

If PHP reports a DLL error on launch, also install:

```powershell
winget install --id Microsoft.VCRedist.2015+.x64
```

**No database required.** The plugin is purely static; `inc_dev.php` makes the MySQL connection non-blocking.

### Start the dev server

```powershell
.\dev-start.cmd        # bypasses ExecutionPolicy, no config needed
.\dev-start.ps1        # PowerShell version
```

Serves on <http://localhost:8765/>. PHP re-reads files on every request — no restart needed after edits. The dev toolbar at the top of the page lets you switch between `fr` and `en` to test the language fallback.

**Do not ship `inc_dev.php` in the deployment ZIP.**

---

## Deployment

### Build the ZIP

```powershell
.\dist-zip.cmd
```

Reads `version` from [`rules/plugin.json`](rules/plugin.json) and produces `dist/rules-{version}.zip`. The archive excludes `inc_dev.php`, `.DS_Store`, `Thumbs.db`, `__MACOSX/`, `.git/`, `.svn/`.

### Release checklist

1. Bump `"version"` in [`rules/plugin.json`](rules/plugin.json).
2. Run `.\dist-zip.cmd`.
3. Upload `dist/rules-{version}.zip` via **Admin → Plugins → Install plugin**.
4. First install: activate the plugin to expose `/pages/rules`. Updates: the installer auto-detects the version bump and replaces files.

The ZIP is flat — plugin contents sit at the root of the archive with no enclosing `rules/` directory.

---

## Detailed documentation

All code conventions (URL patterns via `BASE_URL` / `CDN_URL`, HTML structure, CSS classes, playmat illustration patterns, globally-inherited dependencies, dark-mode selectors, etc.) are documented in [CLAUDE.md](CLAUDE.md).

---

## Direct URLs — all anchors

Section `id`s are identical across all language versions. The anchors below work on both `https://altered.re/pages/rules` (French) and the English version.

### Page sections

| English — Français | URL |
|--------------------|-----|
| Additional rules — Règles supplémentaires | <https://altered.re/pages/rules#regles-sup> |
| Card types — Autres types de cartes | <https://altered.re/pages/rules#types-cartes> |
| Day of exploration — Un jour d'exploration | <https://altered.re/pages/rules#jour> |
| Ending the game — Fin de la partie | <https://altered.re/pages/rules#fin-partie> |
| Game zones — Les zones de jeu | <https://altered.re/pages/rules#zones> |
| Keywords — Mots-clés | <https://altered.re/pages/rules#mots-cles> |
| Mana Orbs — Orbes de Mana | <https://altered.re/pages/rules#mana> |
| Markers & icons — Marqueurs & icônes | <https://altered.re/pages/rules#marqueurs> |
| Materials — Matériel | <https://altered.re/pages/rules#materiel> |
| Parts of a card — Détail d'une carte | <https://altered.re/pages/rules#carte> |
| Presentation — Présentation | <https://altered.re/pages/rules#presentation> |
| Reserve — La Réserve | <https://altered.re/pages/rules#reserve> |
| Setup — Mise en place | <https://altered.re/pages/rules#mise-en-place> |

### Day phases

| English — Français | URL |
|--------------------|-----|
| Afternoon — Après-midi | <https://altered.re/pages/rules#phase-apres-midi> |
| Dusk — Crépuscule | <https://altered.re/pages/rules#phase-crepuscule> |
| Morning — Matin | <https://altered.re/pages/rules#phase-matin> |
| Night — Nuit | <https://altered.re/pages/rules#phase-nuit> |
| Noon — Midi | <https://altered.re/pages/rules#phase-midi> |

### Game zones (playmat)

| English — Français | URL |
|--------------------|-----|
| Deck zone — Zone Deck | <https://altered.re/pages/rules#zone-6> |
| Discard zone — Zone Défausse | <https://altered.re/pages/rules#zone-7> |
| Expedition zones — Zones Expédition | <https://altered.re/pages/rules#zone-2> |
| Hero zone — Zone Héros | <https://altered.re/pages/rules#zone-1> |
| Landmarks zone — Zone Repères | <https://altered.re/pages/rules#zone-4> |
| Mana zone — Zone Mana | <https://altered.re/pages/rules#zone-5> |
| Reserve zone — Zone Réserve | <https://altered.re/pages/rules#zone-3> |

### Keywords glossary

| English — Français | URL |
|--------------------|-----|
| Anchored — Ancré | <https://altered.re/pages/rules#anchored> |
| Ascend — Élevé | <https://altered.re/pages/rules#ascend> |
| Asleep — Endormi | <https://altered.re/pages/rules#asleep> |
| Augment — Amplifier | <https://altered.re/pages/rules#augment> |
| Contact — Contact | <https://altered.re/pages/rules#contact> |
| Cooldown — Rafraîchissement | <https://altered.re/pages/rules#cooldown> |
| Defect — Trahir | <https://altered.re/pages/rules#defect> |
| Defender — Défenseur | <https://altered.re/pages/rules#defender> |
| Eternal — Éternel | <https://altered.re/pages/rules#eternal> |
| Exhaust — Épuiser | <https://altered.re/pages/rules#exhaust> |
| Exhausted Resupply — Ravitailler épuisé | <https://altered.re/pages/rules#exhausted-resupply> |
| Fleeting — Fugace | <https://altered.re/pages/rules#fleeting> |
| Gift — Don | <https://altered.re/pages/rules#gift> |
| Gigantic — Gigantesque | <https://altered.re/pages/rules#gigantic> |
| Resupply — Ravitailler | <https://altered.re/pages/rules#resupply> |
| Rush — Foncer | <https://altered.re/pages/rules#rush> |
| Sabotage — Saboter | <https://altered.re/pages/rules#sabotage> |
| Sacrifice — Sacrifier | <https://altered.re/pages/rules#sacrifice> |
| Scout X — Repérage X | <https://altered.re/pages/rules#scout-x> |
| Seasoned — Aguerri | <https://altered.re/pages/rules#seasoned> |
| Support ability — Capacité de Soutien | <https://altered.re/pages/rules#support-ability> |
| Tough X — Coriace X | <https://altered.re/pages/rules#tough-x> |
