# Altered Quick Rules — plugin altered.re

Plugin servant la référence des **règles rapides v3.0** du jeu de cartes Altered TCG comme page multilingue, à installer sur [altered.re](https://altered.re/) via *Admin → Plugins*.

Architecture conforme aux conventions [AlteredCore Plugin Development](https://altered.re/plugins/README.html). v1 livrée en français ; toute langue non disponible retombe automatiquement sur la version française avec un bandeau bilingue d'avertissement.

---

## Démarrage rapide

Deux scripts à la racine du dépôt :

| Commande | Effet |
|---|---|
| `.\dev-start.cmd` | Lance le serveur PHP local sur <http://localhost:8765/> et ouvre la page dans le navigateur. `Ctrl+C` pour arrêter. |
| `.\dist-zip.cmd` | Produit `dist\rules-{version}.zip`, prêt à uploader sur altered.re via *Admin → Plugins → Install plugin*. |

Chaque commande existe aussi en `.ps1`. Les variantes `.cmd` contournent l'`ExecutionPolicy` PowerShell pour fonctionner sans réglage préalable. Si tu préfères assouplir la policy une fois pour toutes :

```powershell
Set-ExecutionPolicy -ExecutionPolicy RemoteSigned -Scope CurrentUser
```

…après quoi `.\dev-start.ps1` et `.\dist-zip.ps1` fonctionnent directement.

---

## Prérequis pour le dev local

**PHP 8.4** installé via winget en mode utilisateur (pas d'admin requis) :

```powershell
winget install --id PHP.PHP.8.4 --scope user --accept-package-agreements --accept-source-agreements
```

**Pas de MySQL nécessaire.** Le plugin n'utilise aucune base de données ; `inc_dev.php` rend la connexion MySQL non bloquante (avertissement console seulement).

Si PHP affiche une erreur de DLL au lancement, installer aussi le Visual C++ Redistributable :

```powershell
winget install --id Microsoft.VCRedist.2015+.x64
```

---

## Structure du dépôt

```
rules/                     ← contenu du plugin (= ce qui finit dans le ZIP)
  plugin.json              ← manifeste (id, version, slug, assets)
  pages/
    rules.php              ← dispatcher (choix de langue + fallback FR)
    rules.fr.php           ← contenu français
    rules.{lang}.php       ← futures traductions
  assets/
    style.css              ← styles du plugin
    playmat.jpg            ← illustration locale (tapis de jeu)
  inc_dev.php              ← bootstrap dev (NON inclus dans le ZIP)

dev-start.ps1  / .cmd      ← serveur de dev local
dist-zip.ps1   / .cmd      ← packaging du plugin pour déploiement
altered-regles.html        ← page HTML d'origine, conservée comme source
illus/                     ← anciennes illustrations source (non distribuées)
CLAUDE.md                  ← guide détaillé du projet (conventions, URL patterns, etc.)
```

---

## Cycle de développement

1. Lancer `.\dev-start.cmd`.
2. Modifier `rules/pages/rules.fr.php`, `rules/assets/style.css`, etc.
3. Recharger la page — PHP relit les fichiers à chaque requête, aucun redémarrage du serveur nécessaire.
4. La barre noire en haut (`⚙ dev`) permet de basculer entre `en` (testera le fallback) et `fr` (français pur, sans bandeau).

### Ajouter une langue

Déposer `rules/pages/rules.{lang}.php` (copie de `rules.fr.php` traduite). Aucun changement de manifeste ou de dispatcher requis — la détection se fait par présence du fichier.

Dans la nouvelle langue, remplacer `<?= CDN_URL ?>/cards/fr/...` par `<?= CDN_URL ?>/cards/{lang}/...` pour que le texte sur les cartes corresponde à la langue. Les marqueurs et icônes de biome sont neutres et restent identiques.

---

## Déploiement

1. Bumper le champ `version` dans [rules/plugin.json](rules/plugin.json) (semver) si c'est une mise à jour.
2. Lancer `.\dist-zip.cmd`. Sortie : `dist\rules-{version}.zip`.
3. Sur altered.re : *Admin → Plugins → Install plugin*, sélectionner le ZIP, puis *Activate*. Les versions ultérieures (numéro supérieur) écrasent automatiquement l'installation existante.

Le ZIP exclut `inc_dev.php`, `.DS_Store`, `Thumbs.db`, `__MACOSX/`, `.git/`, `.svn/` conformément aux règles documentées par la plateforme.

---

## Documentation détaillée

Toutes les conventions de code (URLs via `BASE_URL` / `CDN_URL`, structure HTML, classes CSS, pattern pour les illustrations de tapis, dépendances héritées globalement du site, etc.) sont dans [CLAUDE.md](CLAUDE.md).
