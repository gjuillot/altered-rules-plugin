# CLAUDE.md

This file provides guidance to Claude Code (claude.ai/code) when working with code in this repository.

## Project overview

This repository builds an **altered.re plugin** (`rules/`) that serves the **Altered TCG Quick Rules v3.0** reference as a multi-language page. The plugin is designed to be installed via the site's *Admin → Plugins* interface.

Plugin architecture follows the AlteredCore conventions documented at <https://altered.re/plugins/README.html> : a `plugin.json` manifest, one front-end page handler per URL, language partials, and a CSS asset injected only on plugin pages.

The legacy single-file `altered-regles.html` (and the unused `illus/` siblings) remain at the repo root as the source of the French extraction. **They are not the deliverable** — the deliverable is the contents of `rules/`.

## Plugin structure

```
rules/
  plugin.json              ← manifest (id "rules", page slug "rules", table_prefix "rl")
  pages/
    rules.php              ← dispatcher: includes the right language partial, falls back to FR
    rules.fr.php           ← French content (reference source for all translations)
    rules.en.php           ← English content
    rules.{lang}.php       ← future translations (drop one in to enable a new language)
  assets/
    style.css              ← rules-specific styles, extracted from the original <style> block
    playmat.jpg            ← background image for setup composition illustrations
    F.webp, M.webp, O.webp ← biome icons (Forêt, Montagne, Eau)
```

No `inc/`, `admin/`, `api/`, or `sql/` directories — the page is purely static content rendered server-side, no DB, no auth, no API.

## Langues disponibles

| Code | Fichier | Statut |
|---|---|---|
| `fr` | `pages/rules.fr.php` | Français — source de référence pour toutes les traductions |
| `en` | `pages/rules.en.php` | Anglais |

**Règle de propagation des modifications.** Toute modification demandée (correction de contenu, ajout/retrait d'un bloc, changement de structure HTML/CSS, nouvelle illustration, mise à jour d'URL, etc.) doit être appliquée à **chaque langue disponible** (`rules.fr.php`, `rules.en.php`, …) afin que toutes les versions restent synchronisées.

**Exception.** Si la modification concerne explicitement une langue en particulier (ex. : corriger une faute de frappe dans le texte anglais, ajuster une tournure propre au français), ne toucher qu'au fichier de cette langue.

Lors de la propagation, adapter chaque version à sa langue : traduire le texte visible, les `alt`/`aria-label`/`figcaption`, et remplacer le code langue dans les URLs de cartes (`/cards/fr/…` ↔ `/cards/{lang}/…`). Les `id` de section, classes CSS, SVG et valeurs de positionnement restent identiques d'une langue à l'autre.

### Dispatcher and language fallback

`pages/rules.php` is tiny: it looks for `pages/rules.{getUiLang()}.php`, includes it if present, otherwise includes `pages/rules.fr.php` and emits a small bilingual notice at the top of the page (`Translation pending — Traduction en cours`).

To add a new language: drop `rules.{lang}.php` next to `rules.fr.php`. No code change in the dispatcher needed.

Per-language partials output **body content only** — no `<!DOCTYPE>`, no `<html>`, no `<head>`, no `<body>`, no outer `<main>` or `.site-wrapper`. The site injects header/footer and provides its own `<main class="container py-4">` wrapper.

## Adding a new language

1. Copy `pages/rules.fr.php` → `pages/rules.{lang}.php` (e.g. `rules.en.php`).
2. Translate prose blocks in place.
3. Update card-image URLs: replace `<?= CDN_URL ?>/cards/fr/...` with `<?= CDN_URL ?>/cards/{lang}/...` so card text matches the visitor's language. Markers, marketing images and biome icons are language-neutral and stay as-is.
4. No manifest change needed — the dispatcher discovers languages by file presence.

## Local development

Copy `inc_dev.php` from `plugins/hello-world/` into the plugin root, edit the DB block at the top, and run `php -S localhost:8000 pages/rules.php`. The dev toolbar lets you toggle language and login state to exercise the fallback path. **Do not ship `inc_dev.php` in the deployment ZIP** — it's a local-only dev tool.

## URL conventions (PHP constants)

All external resource URLs use site-provided PHP constants — never hardcode domains:

| Resource | Pattern |
|---|---|
| Card images, markers, marketing assets, BGA icons | `<?= CDN_URL ?>/cards/...`, `<?= CDN_URL ?>/marketing/...`, `<?= CDN_URL ?>/bga/icons/...` |
| Site-hosted assets (fonts) | `<?= BASE_URL ?>/assets/...` |
| Plugin's own assets (incl. biome icons) | `<?= BASE_URL ?>/plugins/rules/assets/...` |

Both constants are documented without trailing slash, so every path starts with `/`. The `assets/style.css` file is plain CSS (no PHP processing) and does not reference any external URL, so no constant substitution is needed there.

## External dependencies (loaded globally by the site)

The site loads these on every page; the plugin does **not** re-include them:

| Dependency | Loaded as |
|---|---|
| Bootstrap 5.3.3 CSS + JS | global `<link>` and `<script>` in site head/footer |
| Font Awesome 6.5.1 | global `<link>` in site head |
| Altered Icons font | `/assets/font/alteredicons.css`, global |
| Azure theme | `/themes/azure/style.css`, global |
| Site base styles | `/css/style.css`, global |

The only stylesheet the plugin contributes is `assets/style.css`, declared in the manifest's `assets.css` array. It is injected only on the plugin's own front-end pages.

The page uses CSS custom properties defined by the Azure theme (`--sand-50`, `--primary-400`, `--neutral-700`, etc.) — do not hardcode colour values that should follow the site theme.

## Local assets

Files bundled with the plugin:

| Path | Purpose |
|---|---|
| `assets/playmat.jpg` | Background for the setup composition illustrations. Referenced via `<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg`. |
| `assets/Altered_Complete_Rules_5.0.pdf` | Official complete rulebook (v5.0). Linked from a download button in the article header. The page itself is the Quick Rules v3.0 transcription — the PDF is offered as a deeper reference. |
| `assets/F.webp`, `assets/M.webp`, `assets/O.webp` | Biome icons (Forêt, Montagne, Eau). Bundled locally because the host site's biome asset paths have moved in the past. Referenced via `<?= BASE_URL ?>/plugins/rules/assets/{F,M,O}.webp`. |

The repo-root `illus/` directory contains `playmat.webp`, `markers-reunited.jpg`, and `markers-reunited.webp` — none of these are referenced by the HTML and they are intentionally **not** shipped in the plugin.

## HTML structure

Each per-language partial outputs the page body using a two-column layout:
- **Left column** (`col-lg-3`): sticky `<nav class="rules-toc">` sidebar, hidden on mobile
- **Right column** (`col-lg-9`): 12 `<section id="…">` blocks, one per rules chapter

The 12 sections (in order): `#presentation`, `#materiel`, `#mise-en-place`, `#carte`, `#zones`, `#jour`, `#reserve`, `#types-cartes`, `#fin-partie`, `#regles-sup`, `#marqueurs`, `#construction`.

A mobile-only collapsible ToC (`<details class="rule-block">`) mirrors the sidebar.

## Key CSS component classes

- `.rule-block` — standard content card (sand background + border)
- `.rule-figure` — image + caption wrapper; add `.float-right` or `.small` as needed
- `.materiel-item` — equipment list item; use `.static` for non-expandable, or wrap in `<details>` for expandable with thumbnail
- `.marker-item` / `.marker-grid` — icon + label + description rows (used in the Marqueurs section)
- `.rule-callout.tip` / `.rule-callout.warning` — highlighted callout boxes

## Dark mode

Dark mode is controlled by `data-theme="dark"` on a parent element (set by the Re:Union site). All dark-mode overrides use the `[data-theme="dark"]` selector pattern already established in `assets/style.css`.

## Packaging & deployment

Two convenience scripts live at the repo root:

| Script | What it does |
|---|---|
| `dev-start.ps1` / `dev-start.cmd` | Launches PHP's built-in server on <http://localhost:8765/> and opens the page. `Ctrl+C` to stop. Uses the patched `rules/inc_dev.php` which provides BASE_URL/CDN_URL stubs, makes DB optional, and routes static asset requests. |
| `dist-zip.ps1` / `dist-zip.cmd` | Reads `version` from `rules/plugin.json` and produces `dist/rules-{version}.zip` containing the plugin contents (excluding `inc_dev.php`, `.DS_Store`, `Thumbs.db`, `__MACOSX/`, `.git/`, `.svn/`). |

The `.cmd` wrappers bypass the PowerShell `ExecutionPolicy` so they work without prior config.

### Deployment flow

1. Bump the `version` field in [rules/plugin.json](rules/plugin.json) if updating.
2. Run `.\dist-zip.cmd`.
3. Upload `dist/rules-{version}.zip` via **Admin → Plugins → Install plugin** on altered.re.
4. First install: activate the plugin to make `/pages/rules` accessible. Updates: the installer auto-detects the version bump and replaces files.

The ZIP uses a flat layout — the plugin contents (`plugin.json`, `pages/`, `assets/`, …) sit at the top level of the archive, with no enclosing `rules/` directory.

## Assets distants utilisés

Toutes les URLs ci-dessous sont à préfixer par `<?= CDN_URL ?>` dans les fichiers PHP (sauf mention contraire). `CDN_URL` résout vers `https://cdn.alteredcore.org`.

### Marqueurs d'Expédition (par faction)

| Chemin | Faction | Type |
|---|---|---|
| `marketing/game_assets/markers/ALT_AX_Hero_Marker.png` | Axiom | Héros |
| `marketing/game_assets/markers/ALT_AX_Companion_Marker.png` | Axiom | Compagnon |
| `marketing/game_assets/markers/ALT_BR_Hero_Marker.png` | Bravos | Héros |
| `marketing/game_assets/markers/ALT_BR_Companion_Marker.png` | Bravos | Compagnon |
| `marketing/game_assets/markers/ALT_LY_Hero_Marker.png` | Lyra | Héros |
| `marketing/game_assets/markers/ALT_LY_Companion_Marker.png` | Lyra | Compagnon |
| `marketing/game_assets/markers/ALT_MU_Hero_Marker.png` | Muna | Héros |
| `marketing/game_assets/markers/ALT_MU_Companion_Marker.png` | Muna | Compagnon |
| `marketing/game_assets/markers/ALT_OR_Hero_Marker.png` | Ordis | Héros |
| `marketing/game_assets/markers/ALT_OR_Companion_Marker.png` | Ordis | Compagnon |
| `marketing/game_assets/markers/ALT_YZ_Hero_Marker.png` | Yzmir | Héros |
| `marketing/game_assets/markers/ALT_YZ_Companion_Marker.png` | Yzmir | Compagnon |

### Marqueurs de jeu

| Chemin | Nom |
|---|---|
| `marketing/game_assets/markers/ALT_First_Player_A_Marker.png` | Marqueur Premier Joueur |
| `marketing/game_assets/markers/ALT_Boost1_Marker.png` | Marqueur Boost +1 |
| `marketing/game_assets/markers/ALT_Boost2_Marker.png` | Marqueur Boost +2 |
| `marketing/game_assets/markers/ALT_Fleeting_Marker.png` | Marqueur Fugace |
| `marketing/game_assets/markers/ALT_Anchored_Marker.png` | Marqueur Ancré |
| `marketing/game_assets/markers/ALT_Asleep_Marker.png` | Marqueur Endormi |

### Cartes Héros / Héroïne

Pour ajouter une langue, remplacer `/fr/` par le code langue dans le chemin (`/en/`, etc.).

| Chemin (FR) | Nom | Faction | Extension |
|---|---|---|---|
| `cards/fr/CORE/ALT_CORE_B_AX_01_C.webp` | Sierra & Oddball | Axiom | CORE |
| `cards/fr/DUSTER/ALT_DUSTER_B_MU_85_C.webp` | Turuun & Benih | Muna | DUSTER |
| `cards/fr/CORE/ALT_CORE_B_YZ_02_C.webp` | Lindiwe & Max | Yzmir | CORE |

### Cartes Personnage / jeton

| Chemin (FR) | Usage dans la page | Faction | Extension |
|---|---|---|---|
| `cards/fr/CORE/ALT_CORE_B_YZ_14_C.webp` | Anatomie d'une carte (Flamel) | Yzmir | CORE |
| `cards/fr/CORE/ALT_CORE_B_AX_31_C.webp` | Exemple carte jeton (Scarabot) | Axiom | CORE |
| `cards/fr/ALIZE/ALT_ALIZE_B_YZ_47_C.webp` | Exemple carte jeton | Yzmir | ALIZÉ |
| `cards/fr/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp` | Exemple carte jeton | Muna | CYCLONE |
| `cards/fr/CORE/ALT_CORE_B_MU_10_C.webp` | Exemple Crépuscule (Pierre) | Muna | CORE |
| `cards/fr/CORE/ALT_CORE_B_AX_04_C.webp` | Exemple Crépuscule (Noémie, arrière-plan) | Axiom | CORE |
| `cards/fr/CORE/ALT_CORE_B_AX_08_C.webp` | Exemple Crépuscule (Noémie, premier plan) | Axiom | CORE |

### Cartes Aventure

| Chemin | Rôle |
|---|---|
| `marketing/adventure_cards/btg/ADV_CARD_1.png` | Région de départ — Héros |
| `marketing/adventure_cards/btg/ADV_CARD_5.png` | Région de départ — Compagnon |
| `marketing/adventure_cards/btg/ADV_CARD_2.png` | Carte Tumulte 1 |
| `marketing/adventure_cards/btg/ADV_CARD_3.png` | Carte Tumulte 2 |
| `marketing/adventure_cards/btg/ADV_CARD_4.png` | Carte Tumulte 3 |
| `marketing/adventure_cards/btg/ADV_CARD_BACK.png` | Dos de carte Aventure |
| `marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png` | Dos de carte standard |

### Icônes de phase de jeu

| Chemin | Phase |
|---|---|
| `bga/icons/dawn.png` | Matin |
| `bga/icons/noon.png` | Midi |
| `bga/icons/afternoon.png` | Après-midi |
| `bga/icons/dusk.png` | Crépuscule |
| `bga/icons/night.png` | Nuit |

## Icônes utilisées

### Altered Font — icônes de jeu (`fak fa-altered-*`)

Police chargée globalement par le site via `/assets/font/alteredicons.css`. Chaque icône s'insère dans un `<i class="fak fa-altered-X">` à l'intérieur d'un `.ic-circle`.

| Classe | Signification |
|---|---|
| `fa-altered-t` | Épuiser (tapper la carte) |
| `fa-altered-d` | Défausser |
| `fa-altered-j` | Effet « partout » — quelle que soit l'origine de la carte |
| `fa-altered-h` | Effet « depuis la main » |
| `fa-altered-r` | Effet « depuis la Réserve » |

Les classes `.ic-bg-epuiser`, `.ic-bg-defausse`, `.ic-bg-anywhere`, `.ic-bg-hand`, `.ic-bg-reserve` existent mais sont neutralisées (`background: transparent`) — `.ic-circle` affiche les icônes en noir sans fond coloré.

Usage inline dans du texte courant (sans cercle) :

```html
<i class="fak fa-altered-t"></i> Épuisez
```

Usage dans un `.marker-item` (avec cercle et label) :

```html
<div class="marker-item">
  <div class="ic-circle ic-bg-epuiser"><i class="fak fa-altered-t"></i></div>
  <div class="m-text">
    <div class="m-label">Épuiser</div>
    <div class="m-desc">Tourner la carte pour activer son effet.</div>
  </div>
</div>
```

### Font Awesome (`fa-solid fa-*`)

Font Awesome 6.5.1 est chargé globalement par le site — pas besoin de l'importer. Les icônes utilisées sur la page :

| Classe | Usage dans la page |
|---|---|
| `fa-user` | Titre groupe matériel « Pour chaque joueur » |
| `fa-users` | Titre groupe matériel « Pour les 2 joueurs » |
| `fa-layer-group` | Icône de remplacement pour le deck (pas d'image spécifique) |
| `fa-chevron-down` | Flèche d'accordéon sur les `.materiel-item details summary` |
| `fa-trophy` | Type de carte — Héros/Héroïne |
| `fa-arrow-up` | Bouton « Retour en haut » |

**Bootstrap Icons (`bi bi-*`) ne sont pas utilisés** — migrés vers Font Awesome puisque FA est déjà chargé globalement par le site (évite une dépendance externe supplémentaire).

### Icônes de biome / terrain

Images `.webp` bundled with the plugin, depuis `<?= BASE_URL ?>/plugins/rules/assets/` :

| Fichier | Terrain |
|---|---|
| `F.webp` | Forêt |
| `M.webp` | Montagne |
| `O.webp` | Eau |

Deux modes d'emploi :

**Inline dans du texte** — `.biome-ic` (18 × 18 px, `vertical-align: -4px`) :
```html
<img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="Forêt" class="biome-ic">
```

**Badge avec libellé** — `.terrain-badge` (22 × 22 px, fond sable + bordure arrondie) :
```html
<span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="">Forêt</span>
```

### Icônes de phase de jeu

Images `.png` depuis `<?= CDN_URL ?>/bga/icons/` — utilisées en tête de chaque bloc de phase (`<img class="phase-title-icon">`) et dans le tableau récapitulatif des phases.

| Fichier | Phase |
|---|---|
| `dawn.png` | Matin |
| `noon.png` | Midi |
| `afternoon.png` | Après-midi |
| `dusk.png` | Crépuscule |
| `night.png` | Nuit |

## Créer une illustration avec le tapis de jeu

Le pattern `setup-composition` sert à composer une illustration pédagogique incluant le tapis. L'illustration de mise en place (section `#mise-en-place`) en est l'exemple de référence.

### Structure générale

```html
<figure class="rule-figure">
  <div class="setup-composition" role="img" aria-label="[description accessible]">

    <div class="setup-main">
      <!-- 1. Rangée de cartes Aventure au-dessus du tapis -->
      <div class="setup-adventures" style="position: relative;">
        <!-- step-markers et cartes Aventure ici -->
      </div>

      <!-- 2. Tapis avec éléments posés dessus -->
      <div class="setup-playmat">
        <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Tapis de jeu Altered">
        <!-- éléments posés en position: absolute ici -->
      </div>
    </div>

    <!-- 3. Panneau latéral droit (optionnel) -->
    <aside class="setup-side">
      <!-- marqueurs éparpillés et/ou piles de cartes jeton -->
    </aside>

  </div>
  <figcaption>…</figcaption>
</figure>
```

### Rangée de cartes Aventure (`.setup-adventures`)

Grille CSS de 5 colonnes égales. Chaque cellule est un `.adv-wrap` (carré aspect-ratio 1:1) contenant une carte tournée à 90° :

```html
<div class="adv-wrap">
  <!-- Carte Héros : tournée -90° (face gauche) -->
  <img class="adv-hero-card" src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_1.png" alt="" loading="lazy">
  <!-- Marqueurs posés sur la carte : position absolute, width 28% -->
  <img class="placed-marker top"    src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png" alt="" loading="lazy">
  <img class="placed-marker bottom" src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="" loading="lazy">
</div>

<div class="adv-wrap">
  <!-- Carte Tumulte / Compagnon : tournée +90° -->
  <img class="adv-tumult-card" src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_BACK.png" alt="" loading="lazy">
</div>
```

Classes de rotation disponibles : `adv-hero-card` (−90°), `adv-tumult-card` (+90°), `adv-companion-card` (+90°).

### Éléments posés sur le tapis (`.setup-playmat`)

Le tapis est `position: relative`. Les cartes et marqueurs utilisent `position: absolute` via des classes prédéfinies :

| Classe | Emplacement |
|---|---|
| `.placed-card.placed-hero` | Carte Héros — `top: 5%, left: 50%` (centrée) |
| `.placed-first-player` | Marqueur Premier Joueur — `top: 14%, left: 50%` |
| `.placed-card.placed-deck` | Dos de carte (Deck) — `bottom: 7%, right: 13%` |

Pour d'autres positions, ajouter une classe CSS dédiée ou un `style` inline avec `top/left` en pourcentages (les % restent valables quelle que soit la taille d'affichage du tapis).

Les marqueurs transparents (`.placed-first-player`, `.placed-marker`) doivent avoir `filter: drop-shadow(…)` plutôt que `box-shadow` pour respecter la forme du PNG.

**Règle absolue — jamais de fond blanc sur les marqueurs PNG.** Le thème Azure impose `background`, `border-radius` et `box-shadow` sur les images via des règles externes. Un `background: transparent` en style inline ne suffit pas à les neutraliser. Seule une règle CSS définie dans `assets/style.css` avec une spécificité suffisante peut l'emporter.

Pour les marqueurs, utiliser exclusivement la classe `.dusk-marker` (scoped à `.dusk-adventures`) qui contient déjà `background: transparent; border: none; box-shadow: none; border-radius: 0`. En dehors du contexte `.dusk-adventures`, ne jamais poser un marqueur PNG avec de simples styles inline.

Pour les cadres de mise en valeur (ex. : rectangle jaune autour d'un groupe de marqueurs), utiliser un `<svg>` avec `<rect fill="none">` — un élément SVG n'a pas de box model CSS et ne peut pas hériter d'un fond blanc :

```html
<!-- Marqueurs dans .dusk-adventures : classe .dusk-marker obligatoire -->
<div class="dusk-adventures" style="width: 280px; height: 220px; margin: 0 auto;">
  <div class="adv-slot" style="width: 280px;">
    <img class="adv-card-dusk" src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png" alt="" loading="lazy">
    <img class="dusk-marker" style="top: 28%; left: 25%; transform: translate(-50%,-50%);"
         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="…" loading="lazy">
    <img class="dusk-marker" style="top: 28%; left: 39%; transform: translate(-50%,-50%);"
         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png" alt="…" loading="lazy">
    <!-- Cadre jaune : SVG, jamais une <div> -->
    <svg style="position:absolute;top:0;left:0;width:100%;height:100%;
                overflow:visible;pointer-events:none;z-index:4;"
         viewBox="0 0 280 220">
      <rect x="24" y="112" width="133" height="92"
            fill="none" stroke="#f5c542" stroke-width="2.5" rx="6"/>
    </svg>
  </div>
</div>
```

### Tailles et positions standard des cartes par zone

Largeur standard d'une carte sur le tapis : **`width: 10%`** (10 % de la largeur du tapis). Cette taille s'aligne visuellement sur les rectangles Deck/Discard imprimés sur le tapis et donne un rendu cohérent dans toutes les zones. La hauteur en résulte automatiquement (`height: auto`) — soit ~25,6 % de la hauteur du tapis, vu le ratio portrait 2:3 et le tapis ~1024×600.

Espacement standard entre cartes adjacentes dans une même zone : **11 % d'écart entre les valeurs de `left`** — ça laisse une marge visible d'environ 1 % entre deux cartes de 10 % de large. Pour les zones qui doivent contenir 3 cartes (cas d'excédent en Réserve ou Repères), on utilise le même écart, les cartes débordent légèrement de leur rectangle mais l'effet « excédent » reste lisible.

Positions calibrées contre les rectangles imprimés sur `assets/playmat.jpg` :

| Zone | `top` | `left` par carte | Capacité |
|---|---|---|---|
| Héros | 7 % | 45 % | 1 carte centrée |
| Expédition gauche | 8 % | 3 % · 14 % | jusqu'à 2 cartes |
| Expédition droite | 8 % | 77 % · 88 % | jusqu'à 2 cartes |
| Réserve | 37 % | 1 % · 12 % · 23 % | excédent jusqu'à 3 cartes |
| Repères | 37 % | 67 % · 78 % · 89 % | excédent jusqu'à 3 cartes |
| Deck | 67 % | 76 % | dos de carte |
| Discard | 67 % | ~87 % | (par symétrie avec Deck) |

Pour figurer une carte « grisée » (Personnage épuisé ou en cours de défausse) : appliquer `filter: grayscale(100%) brightness(0.55);` sur l'image. Préserver le `box-shadow` standard pour garder la profondeur.

Pour poser un jeton sur une carte (Fugace, Ancré, Endormi, Boost…) : utiliser une image en `position: absolute` avec `width: ~3.5%` du tapis et un `filter: drop-shadow(…)`. Exemple pour un jeton Fugace sur une carte d'Expédition droite : `top: 25%; left: 83%; width: 3.5%;` — placer le jeton vers le bas de la carte (à la hauteur d'où sort la flèche de défausse) le rend plus lisible.

Pour tracer des flèches courbes entre cartes (par exemple Repos→Réserve, Nettoyage→Discard) : utiliser une `<svg>` en overlay sur tout le conteneur de la composition avec `viewBox="0 0 1984 1000"` (≈ ratio composition tapis + bande hors-tapis), `preserveAspectRatio="none"` et `vector-effect="non-scaling-stroke"` sur les chemins. Conversion des pourcentages composition vers unités viewBox : `X% × 19.84` pour les abscisses, `Y% × 10` pour les ordonnées. Pour qu'une flèche parte/arrive « à l'intérieur » d'une carte plutôt qu'à son bord, décaler le point de 15-20 % de la dimension de la carte vers son centre.

### Indicateurs d'étape (`.step-marker`)

Cercles jaunes numérotés (32 px, fond `#f5c542`) positionnés en `absolute` par `style` inline :

```html
<div class="step-marker" style="top: 5%; left: 40%; transform: translate(0, -50%);">5</div>
```

Peuvent être placés dans `.setup-adventures`, `.setup-playmat` ou `.setup-side`. Prévoir `position: relative` sur le conteneur parent direct.

### Panneau latéral (`.setup-side`)

Deux sous-composants optionnels :

**Marqueurs éparpillés** — conteneur `height: 140px` en `position: relative`, chaque marqueur en `position: absolute` avec `top/left` en % et `transform: rotate(Xdeg)` pour l'effet aléatoire :

```html
<div class="setup-markers-scatter">
  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" loading="lazy"
       style="top: 5%; left: 8%; transform: rotate(-12deg);">
  …
</div>
```

**Piles de cartes jeton** — flex row de `.token-stack` (70 × 110 px). Deux `<img>` en `position: absolute` : le second décalé de `4px top` et `4px left` pour simuler l'épaisseur :

```html
<div class="setup-tokens-stacks">
  <div class="token-stack">
    <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
    <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
  </div>
</div>
```

## Scroll offset

`section[id] { scroll-margin-top: 7rem; }` compensates for the site's sticky header when jumping via ToC links. Adjust only if the host site's header height changes.
