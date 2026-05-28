
<!-- En-tête article -->
    <div class="news-detail-header">
      <h1 class="news-detail-title">Règles rapides du jeu Altered TCG</h1>
    </div>

    <div class="row">

      <!-- Sommaire latéral (desktop) -->
      <aside class="col-lg-3 d-none d-lg-block">
        <nav class="rules-toc" aria-label="Sommaire">
          <h6>
            <img src="<?= CDN_URL ?>/marketing/altered/altered-symbol-color.png" alt="">
            Sommaire
          </h6>
          <ol>
            <li><a href="#presentation">Présentation</a></li>
            <li><a href="#materiel">Matériel</a></li>
            <li><a href="#mise-en-place">Mise en place</a></li>
            <li><a href="#mana">Orbes de Mana</a></li>
            <li><a href="#zones">Les zones de jeu</a></li>
            <li><a href="#carte">Détail d'une carte</a></li>
            <li><a href="#types-cartes">Types de cartes</a></li>
            <li>
              <a href="#jour">Un jour d'exploration</a>
              <ul class="rules-toc-sub">
                <li><a href="#phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy">Matin</a></li>
                <li><a href="#phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy">Midi</a></li>
                <li><a href="#phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy">Après-midi</a></li>
                <li><a href="#phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy">Crépuscule</a></li>
                <li><a href="#phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy">Nuit</a></li>
              </ul>
            </li>
            <li><a href="#reserve">La Réserve</a></li>
            <li><a href="#fin-partie">Fin de la partie</a></li>
            <li><a href="#regles-sup">Règles supplémentaires</a></li>
            <li><a href="#marqueurs">Marqueurs &amp; icônes</a></li>
            <li><a href="#mots-cles">Mots-clés</a></li>
          </ol>
        </nav>
      </aside>

      <!-- Contenu principal -->
      <div class="col-lg-9">
        <div class="news-detail-content">

          <p class="lead">
            Bienvenue dans <strong>Altered</strong>, un jeu de cartes à collectionner où vous menez
            deux Expéditions à travers des terres transformées par le Tumulte. Votre objectif&nbsp;:
            <strong>réunir vos deux Expéditions avant l'adversaire</strong>.
          </p>
		  <p class="lead">
			Cette page est une transcription complétée du livret <em>« Altered TCG — Quick Rules 3.0 »</em>
			publié par Equinox (2025). <br />
			<a href="<?= BASE_URL ?>/plugins/rules/assets/Altered_Complete_Rules_5.0.pdf" target="_blank" rel="noopener">
			  <i class="fa-solid fa-file-pdf"></i>
			  Télécharger les règles complètes (PDF, v5.0) - Anglais uniquement
			</a>
		  </p>

          <!-- Sommaire mobile -->
          <div class="d-lg-none mb-4">
            <details class="rule-block">
              <summary class="fw-bold" style="cursor:pointer;">📑 Voir le sommaire</summary>
              <ol class="mt-3 mb-0">
                <li><a href="#presentation">Présentation</a></li>
                <li><a href="#materiel">Matériel</a></li>
                <li><a href="#mise-en-place">Mise en place</a></li>
                <li><a href="#mana">Orbes de Mana</a></li>
                <li><a href="#zones">Les zones de jeu</a></li>
                <li><a href="#carte">Détail d'une carte</a></li>
                <li><a href="#types-cartes">Types de cartes</a></li>
                <li>
                  <a href="#jour">Un jour d'exploration</a>
                  <ul class="rules-toc-sub">
                    <li><a href="#phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy">Matin</a></li>
                    <li><a href="#phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy">Midi</a></li>
                    <li><a href="#phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy">Après-midi</a></li>
                    <li><a href="#phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy">Crépuscule</a></li>
                    <li><a href="#phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy">Nuit</a></li>
                  </ul>
                </li>
                <li><a href="#reserve">La Réserve</a></li>
                <li><a href="#fin-partie">Fin de la partie</a></li>
                <li><a href="#regles-sup">Règles supplémentaires</a></li>
                <li><a href="#marqueurs">Marqueurs &amp; icônes</a></li>
                <li><a href="#construction">Construction de deck</a></li>
                <li><a href="#mots-cles">Mots-clés</a></li>
              </ol>
            </details>
          </div>

          <!-- ========== 1. PRÉSENTATION ========== -->
          <section id="presentation">
            <h2 class="section-title"><span>1. Présentation</span></h2>

            <div class="rule-block">
              <figure class="rule-figure float-right wide">
                <!-- Les marqueurs PNG utilisent .dusk-marker (scoped à .dusk-adventures) qui
                     neutralise le fond blanc imposé par le thème Azure.
                     Le cadre jaune est un <svg> pour éviter tout fond CSS. -->
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Carte Aventure Tumulte avec marqueurs Expédition : les deux marqueurs Axiom sont réunis, les marqueurs Muna sont séparés">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <!-- ADV_CARD_3 tournée +90° — width: 160px pour remplir exactement le container 224×160 -->
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                         alt="" loading="lazy">
                    <!-- Partie haute : marqueurs Muna séparés (taille et positions d'origine) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 10%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Marqueur Héros Muna" loading="lazy">
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; right: 10%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Marqueur Compagnon Muna" loading="lazy">
                    <!-- Partie basse : marqueurs Axiom côte à côte à gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: 7%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Marqueur Héros Axiom" loading="lazy">
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: calc(7% + 47px);"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Marqueur Compagnon Axiom" loading="lazy">
                    <!-- Cadre jaune autour des marqueurs Axiom — SVG, aucun fond CSS possible -->
                    <svg style="position: absolute; top: 11%; left: 3%; width: 100%; height: 100%;
                                overflow: visible; pointer-events: none; z-index: 4;"
                         viewBox="0 0 224 160">
                      <!-- Axiom Hero: left≈16px, bottom 10%→top≈102px, 42×42px
                           Axiom Companion: left≈63px — rect avec 5px de marge -->
                      <rect x="11" y="97" width="99" height="52"
                            fill="none" stroke="#f5c542" stroke-width="2.5" rx="6"/>
                    </svg>
                  </div>
                </div>
                <figcaption>Les marqueurs Expédition Axiom (marron) sont réunis à la fin du Jour&nbsp;: <strong>Axiom gagne la partie&nbsp;!</strong> Les marqueurs Muna (verts), eux, sont encore séparés.</figcaption>
              </figure>

              <p>
                Altered est un <strong>jeu de cartes à collectionner</strong> dans lequel chaque
                joueur·se utilise un deck dirigé par une carte <strong>Héros ou Héroïne</strong>.
                Plusieurs decks de démarrage sont prêts à l'emploi, mais vous pouvez les personnaliser
                ou créer un deck entièrement nouveau.
              </p>

              <h4>Aperçu du jeu</h4>
              <p>Vous menez <strong>deux Expéditions</strong> qui explorent les terres transformées par le Tumulte&nbsp;:</p>
              <ul>
                <li>L'<strong>Expédition Héros</strong>, menée par votre Héros/Héroïne et représentée par le marqueur Expédition Héros&nbsp;<img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="Marqueur Expédition Héros" class="inline-marker-ic">.</li>
                <li>L'<strong>Expédition Compagnon</strong>, représentée par le marqueur Expédition Compagnon&nbsp;<img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png" alt="Marqueur Expédition Compagnon" class="inline-marker-ic">.</li>
              </ul>
              <p>
                Les Expéditions progressent l'une vers l'autre au fil de la partie. Votre objectif est
                de <strong>les réunir avant l'adversaire</strong>.
              </p>

              <div style="clear:both"></div>

              <h4>Les 6 factions</h4>
              <p>Chaque Héros/Héroïne appartient à l'une des six factions du jeu. Chaque faction possède deux marqueurs Expédition&nbsp;: le marqueur de gauche est le <strong>marqueur Héros</strong>, celui de droite le <strong>marqueur Compagnon</strong>.</p>
              <div class="factions-grid">
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="Marqueur Héros Axiom">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png" alt="Marqueur Compagnon Axiom">
                  </div>
                  <div class="faction-name">Axiom</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_BR_Hero_Marker.png" alt="Marqueur Héros Bravos">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_BR_Companion_Marker.png" alt="Marqueur Compagnon Bravos">
                  </div>
                  <div class="faction-name">Bravos</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_LY_Hero_Marker.png" alt="Marqueur Héros Lyra">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_LY_Companion_Marker.png" alt="Marqueur Compagnon Lyra">
                  </div>
                  <div class="faction-name">Lyra</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png" alt="Marqueur Héros Muna">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png" alt="Marqueur Compagnon Muna">
                  </div>
                  <div class="faction-name">Muna</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_OR_Hero_Marker.png" alt="Marqueur Héros Ordis">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_OR_Companion_Marker.png" alt="Marqueur Compagnon Ordis">
                  </div>
                  <div class="faction-name">Ordis</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_YZ_Hero_Marker.png" alt="Marqueur Héros Yzmir">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_YZ_Companion_Marker.png" alt="Marqueur Compagnon Yzmir">
                  </div>
                  <div class="faction-name">Yzmir</div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 2. MATÉRIEL ========== -->
          <section id="materiel">
            <h2 class="section-title"><span>2. Matériel</span></h2>

            <p>
              Voici tous les éléments fournis dans une boîte de démarrage Altered. Cliquez sur
              chaque élément avec une vignette pour voir l'illustration en grand.
            </p>

            <!-- ===== Groupe 1 : Pour chaque joueur ===== -->
            <div class="materiel-group">
              <h3 class="materiel-group-title">
                <i class="fa-solid fa-user"></i>
                Pour chaque joueur
              </h3>

              <!-- Tapis de jeu (accordéon) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">1 tapis de jeu <span class="badge-optional">optionnel</span></div>
                      <div class="item-desc">Recommandé pour les débutants&nbsp;: il aide à visualiser les différentes zones de jeu (Expédition, Héros, Réserve, Repères, Mana, Deck, Défausse).</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail">
                    <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Tapis de jeu Altered avec ses zones">
                    <div class="detail-caption">Le tapis de jeu et toutes ses zones.</div>
                  </div>
                </details>
              </div>

              <!-- Deck de 39 cartes (statique : pas d'illustration unique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <i class="fa-solid fa-layer-group" style="font-size:1.8rem; color: var(--primary-400);"></i>
                </div>
                <div class="item-text">
                  <div class="item-title">1 deck de 39 cartes</div>
                  <div class="item-desc">Le deck que vous utiliserez tout au long de la partie.</div>
                </div>
              </div>

              <!-- Carte Héros (accordéon) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_01_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">1 carte Héros ou Héroïne</div>
                      <div class="item-desc">Détermine votre faction et votre stratégie de jeu.</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail">
                    <div class="hero-examples">
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_01_C.webp"
                             alt="Carte Héros Sierra & Oddball, faction Axiom"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Axiom</div>
                          Sierra &amp; Oddball
                        </div>
                      </div>
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/fr/DUSTER/ALT_DUSTER_B_MU_85_C.webp"
                             alt="Carte Héros Turuun & Benih, faction Muna"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Muna</div>
                          Turuun &amp; Benih
                        </div>
                      </div>
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_YZ_02_C.webp"
                             alt="Carte Héroïne Lindiwe & Max, faction Yzmir"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Yzmir</div>
                          Lindiwe &amp; Maw
                        </div>
                      </div>
                    </div>
                    <div class="detail-caption">Trois exemples de cartes Héros / Héroïne issus de différentes factions.</div>
                  </div>
                </details>
              </div>

              <!-- Marqueurs Expédition (statique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                       alt="" loading="lazy">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">2 marqueurs Expédition</div>
                  <div class="item-desc">Un marqueur Héros et un marqueur Compagnon, aux couleurs de votre faction.</div>
                </div>
              </div>
            </div>

            <!-- ===== Groupe 2 : Pour les 2 joueurs ===== -->
            <div class="materiel-group">
              <h3 class="materiel-group-title">
                <i class="fa-solid fa-user-group"></i>
                Pour les 2 joueurs
              </h3>

              <!-- Marqueur Premier Joueur (statique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">1 marqueur Premier Joueur</div>
                  <div class="item-desc">Indique qui commence le tour. Change de camp chaque Matin.</div>
                </div>
              </div>

              <!-- Cartes Aventure (accordéon avec composition) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                           alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">5 cartes Aventure</div>
                      <div class="item-desc">2 régions de départ (Héros et Compagnon) + 3 cartes Tumulte.</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail adv-detail-pair">
                    <figure class="adv-detail-fig">
                      <div class="adventure-stack left">
                        <img class="adv-companion"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_5.png"
                             alt="" loading="lazy">
                        <img class="adv-hero"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_1.png"
                             alt="" loading="lazy">
                      </div>
                      <figcaption class="detail-caption">Régions de départ Héros et Compagnon (empilées).</figcaption>
                    </figure>
                    <figure class="adv-detail-fig">
                      <div class="adventure-stack right">
                        <img class="tumult-1"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_2.png"
                             alt="" loading="lazy">
                        <img class="tumult-2"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                             alt="" loading="lazy">
                        <img class="tumult-3"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_4.png"
                             alt="" loading="lazy">
                      </div>
                      <figcaption class="detail-caption">3 cartes Tumulte formant le chemin à parcourir.</figcaption>
                    </figure>
                    <figure class="adv-detail-fig">
                      <div class="tumulte-regions-wrap">
                        <div class="tumulte-rotated-card">
                          <img src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                               alt="Carte Tumulte avec ses deux régions" loading="lazy">
                          <div class="tumulte-region-box rgn-left">1</div>
                          <div class="tumulte-region-box rgn-right">2</div>
                        </div>
                      </div>
                      <figcaption class="detail-caption">Chaque carte Tumulte comporte deux régions à traverser.</figcaption>
                    </figure>
                  </div>
                </details>
              </div>

              <!-- Cartes jeton (accordéon avec éventail) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">Cartes jeton</div>
                      <div class="item-desc">Scarabots, soldats, etc. — créées par d'autres cartes en cours de partie.</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail composition-wrap">
                    <div class="token-fan" role="img" aria-label="Trois exemples de cartes jeton">
                      <img class="token-1"
                           src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp"
                           alt="" loading="lazy">
                      <img class="token-2"
                           src="<?= CDN_URL ?>/cards/fr/ALIZE/ALT_ALIZE_B_YZ_47_C.webp"
                           alt="" loading="lazy">
                      <img class="token-3"
                           src="<?= CDN_URL ?>/cards/fr/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="detail-caption">Exemples de jetons issus des différentes extensions.</div>
                  </div>
                </details>
              </div>

              <!-- Marqueurs Cartes (statique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png"
                       alt="" loading="lazy">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png"
                       alt="" loading="lazy">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png"
                       alt="" loading="lazy">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png"
                       alt="" loading="lazy">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">Marqueurs Cartes</div>
                  <div class="item-desc">Boost +1, Boost +2, Fugace, Ancré et Endormi — à poser sur les Personnages selon les effets.</div>
                </div>
              </div>

              <!-- Marqueurs Terrains (statique, pas d'illustration disponible) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp"
                       alt="" loading="lazy">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp"
                       alt="" loading="lazy">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">Marqueurs Terrains</div>
                  <div class="item-desc">Forêt, Montagne et Eau — pour modifier les terrains d'une région en cours de partie.</div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 3. MISE EN PLACE ========== -->
          <section id="mise-en-place">
            <h2 class="section-title"><span>3. Mise en place</span></h2>

            <div class="rule-block">
              <figure class="rule-figure">
                <div class="setup-composition" role="img"
                     aria-label="Mise en place complète : cartes Aventure alignées en haut, tapis avec Héros et Deck, marqueurs et jetons sur le côté">

                  <div class="setup-main">
                    <!-- Rangée de cartes Aventure au-dessus du tapis -->
                    <div class="setup-adventures" style="position: relative;">

                      <!-- Étape 1 : cadre + numéro autour des 3 Tumulte -->
                      <div class="tumult-frame" style="top: 8%; left: 20%; right: 20%; bottom: 8%;"></div>
                      <div class="step-marker" style="top: -16px; left: 50%; transform: translateX(-50%);">1</div>

                      <!-- Étape 2 : numéro dans les coins extérieurs des cartes Expédition -->
                      <div class="step-marker" style="top: 0%; left: 0; transform: translate(-30%, 0);">2</div>
                      <div class="step-marker" style="top: 0%; right: 0; transform: translate(30%, 0);">2</div>

                      <!-- Étape 3 : marqueurs Expédition (entre Muna haut et Axiom bas) -->
                      <div class="step-marker" style="top: 50%; left: 10%; transform: translate(-50%, -50%);">3</div>
                      <div class="step-marker" style="top: 50%; left: 90%; transform: translate(-50%, -50%);">3</div>

                      <div class="adv-wrap">
                        <img class="adv-hero-card"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_1.png"
                             alt="" loading="lazy">
                        <img class="placed-marker top"
                             src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                             alt="" loading="lazy">
                        <img class="placed-marker bottom"
                             src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                             alt="" loading="lazy">
                      </div>
                      <div class="adv-wrap">
                        <img class="adv-tumult-card"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_BACK.png"
                             alt="" loading="lazy">
                      </div>
                      <div class="adv-wrap">
                        <img class="adv-tumult-card"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_BACK.png"
                             alt="" loading="lazy">
                      </div>
                      <div class="adv-wrap">
                        <img class="adv-tumult-card"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_BACK.png"
                             alt="" loading="lazy">
                      </div>
                      <div class="adv-wrap">
                        <img class="adv-companion-card"
                             src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_5.png"
                             alt="" loading="lazy">
                        <img class="placed-marker top"
                             src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                             alt="" loading="lazy">
                        <img class="placed-marker bottom"
                             src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                             alt="" loading="lazy">
                      </div>
                    </div>

                    <!-- Tapis avec carte Héros et dos de carte sur la zone Deck -->
                    <div class="setup-playmat">
                      <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Tapis de jeu Altered">

                      <!-- Étape 3 : marqueurs Expédition (déjà visibles sur les cartes Aventure plus haut) -->
                      <!-- Étape 4 : le tapis lui-même -->
                      <div class="step-marker" style="top: 50%; left: -16px; transform: translateY(-50%);">4</div>

                      <!-- Étape 5 : Sierra sur zone Héros -->
                      <div class="step-marker" style="top: 5%; left: 40%; transform: translate(0, -50%);">5</div>

                      <!-- Étape 6 : marqueur Premier Joueur sur Sierra -->
                      <div class="step-marker" style="top: 35%; left: 50%; transform: translate(-50%, -100%);">6</div>

                      <!-- Étape 7 : deck face cachée -->
                      <div class="step-marker" style="bottom: 7%; right: calc(13% + 11% + 6px); transform: translate(50%, 50%);">7</div>

                      <img class="placed-card placed-hero"
                           src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_01_C.webp"
                           alt="Carte Héros Sierra & Oddball placée sur la zone Héros"
                           loading="lazy">
                      <img class="placed-first-player"
                           src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png"
                           alt="Marqueur Premier Joueur"
                           loading="lazy">
                      <img class="placed-card placed-deck"
                           src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Deck face cachée sur la zone Deck"
                           loading="lazy">
                    </div>
                  </div>

                  <!-- Panneau latéral droit : marqueurs éparpillés et piles de jetons -->
                  <aside class="setup-side" style="position: relative;">
				  <!-- Étape 8 : marqueurs et jetons à portée -->
				  <div class="step-marker" style="top: 0; left: 50%; transform: translateX(-50%);">8</div>
					  
                    <div class="setup-markers-scatter" aria-label="Marqueurs disponibles">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" loading="lazy" style="top: 5%;   left: 8%;  transform: rotate(-12deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" loading="lazy" style="top: 18%;  left: 38%; transform: rotate(8deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" loading="lazy" style="top: 0;     left: 68%; transform: rotate(-5deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png" alt="" loading="lazy" style="top: 30%;  left: 4%;  transform: rotate(15deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png" alt="" loading="lazy" style="top: 38%;  left: 55%; transform: rotate(-8deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png" alt="" loading="lazy" style="top: 22%;  left: 80%; transform: rotate(20deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="" loading="lazy" style="top: 55%;  left: 22%; transform: rotate(-15deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="" loading="lazy" style="top: 48%;  left: 70%; transform: rotate(10deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="" loading="lazy" style="top: 65%;  left: 45%; transform: rotate(5deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="" loading="lazy" style="top: 72%;  left: 8%;  transform: rotate(7deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="" loading="lazy" style="top: 80%;  left: 80%; transform: rotate(-10deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="" loading="lazy" style="top: 85%;  left: 35%; transform: rotate(-3deg);">
                      <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="" loading="lazy" style="top: 90%;  left: 60%; transform: rotate(18deg);">
                    </div>

                    <div class="setup-tokens-stacks" aria-label="Cartes jetons" style="position: relative;">

                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
                      </div>
                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/fr/ALIZE/ALT_ALIZE_B_YZ_47_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/fr/ALIZE/ALT_ALIZE_B_YZ_47_C.webp" alt="" loading="lazy">
                      </div>
                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/fr/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/fr/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp" alt="" loading="lazy">
                      </div>
                    </div>
                  </aside>

                </div>
                <figcaption>Mise en place complète&nbsp;: cartes Aventure alignées en haut, tapis avec carte Héros et Deck en place, marqueurs et jetons à portée.</figcaption>
              </figure>

              <ol>
                <li>Mélangez les <strong>trois cartes Tumulte</strong> et alignez-les face cachée entre les deux camps opposés.</li>
                <li>Placez la <strong>carte région de départ Héros</strong> à une extrémité de la ligne et la <strong>carte région de départ Compagnon</strong> à l'autre extrémité.</li>
                <li>Chacun·e place son <strong>marqueur Expédition Héros</strong> et son <strong>marqueur Expédition Compagnon</strong> sur les régions de départ correspondantes.</li>
                <li>Installez les <strong>deux tapis de jeu</strong> face à face de chaque côté du Tumulte.</li>
                <li>Chaque joueur·se place sa <strong>carte Héros ou Héroïne</strong> dans la zone Héros du tapis de jeu.</li>
                <li>Déterminez au hasard qui commencera la partie, et placez le <strong>marqueur Premier Joueur</strong> sur sa carte Héros/Héroïne.</li>
                <li>Chaque joueur·se mélange son deck et le place face cachée dans la zone Deck.</li>
                <li>Gardez le reste des cartes jeton et marqueurs à portée de main.</li>
              </ol>
            </div>

            <div class="rule-block">
              <h4>Main de départ</h4>
              <p>
                <strong>Piochez 6 cartes</strong> dans votre deck, puis choisissez-en <strong>3</strong>
                que vous placez dans votre zone de Mana, <strong>face cachée et redressées</strong>.
                Les trois autres cartes constituent votre <strong>main de départ</strong>.
              </p>
            </div>
          </section>

          <!-- ========== 4. ORBES DE MANA ========== -->
          <section id="mana">
            <h2 class="section-title"><span>4. Orbes de Mana</span></h2>
            <div class="rule-block">
              <figure class="rule-figure">
                <div class="mana-orbs-composition" role="img"
                     aria-label="Orbes de Mana : redressée à gauche, épuisée (tournée à 90°) à droite">
                  <div class="mana-orb">
                    <div class="orb-wrap">
                      <img src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Orbe de Mana redressée" loading="lazy">
                    </div>
                    <div class="orb-label">Redressée</div>
                  </div>
                  <div class="mana-orb epuisee">
                    <div class="orb-wrap">
                      <img src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Orbe de Mana épuisée" loading="lazy">
                    </div>
                    <div class="orb-label">Épuisée</div>
                  </div>
                </div>
              </figure>
              <ul>
                <li>Les cartes dans la zone de Mana sont toujours <strong>face cachée</strong> et sont appelées <strong>Orbes de Mana</strong>.</li>
                <li>Chaque Orbe de Mana donne <strong>1 Mana</strong> lorsqu'il est épuisé.</li>
                <li>Redressez tous vos Orbes de Mana pendant la <strong>phase Matin</strong>.</li>
                <li>Une carte face cachée dans la zone de Mana y reste <strong>jusqu'à la fin de la partie</strong>.</li>
              </ul>
            </div>
          </section>

          <!-- ========== 5. LES ZONES DE JEU ========== -->
          <section id="zones">
            <h2 class="section-title"><span>5. Les zones de jeu</span></h2>

            <p>
              Le tapis de jeu présente plusieurs zones, chacune avec un rôle précis pendant la partie.
              Voici un aperçu de ces zones&nbsp;: cliquez sur les numéros du tapis pour aller à la description correspondante.
            </p>

            <figure class="rule-figure">
              <div class="playmat-annotated">
                <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Tapis de jeu Altered avec les zones numérotées de 1 à 7">
                <a href="#zone-1" class="zone-pin" style="top: 11%; left: 50%;"
                   aria-label="Zone Héros">1</a>
                <a href="#zone-2" class="zone-pin" style="top: 14%; left: 12%;"
                   aria-label="Zone Expédition Héros">2</a>
                <a href="#zone-2" class="zone-pin" style="top: 14%; left: 88%;"
                   aria-label="Zone Expédition Compagnon">2</a>
                <a href="#zone-3" class="zone-pin" style="top: 47%; left: 17%;"
                   aria-label="Zone Réserve">3</a>
                <a href="#zone-4" class="zone-pin" style="top: 47%; left: 75%;"
                   aria-label="Zone Repères">4</a>
                <a href="#zone-5" class="zone-pin" style="top: 78%; left: 17%;"
                   aria-label="Zone Mana">5</a>
                <a href="#zone-6" class="zone-pin" style="top: 82%; left: 78%;"
                   aria-label="Zone Deck">6</a>
                <a href="#zone-7" class="zone-pin" style="top: 82%; left: 92%;"
                   aria-label="Zone Défausse">7</a>
              </div>
              <figcaption>Les 7 zones du tapis de jeu, numérotées dans l’ordre des descriptions ci-dessous.</figcaption>
            </figure>

            <div class="zone-list">

              <div class="zone-item" id="zone-1">
                <div class="zone-num">1</div>
                <div class="zone-content">
                  <div class="zone-name">Zone Héros</div>
                  <div class="zone-desc">
                    <p>C’est là que vous placez votre carte <strong>Héros ou Héroïne</strong> au début de la partie. Cette carte y reste pendant toute la partie et peut être utilisée pour activer sa capacité spéciale.</p>
                    <p>En début de partie, le <strong>marqueur Premier Joueur</strong> est posé sur la carte Héros du joueur qui commence.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-2">
                <div class="zone-num">2</div>
                <div class="zone-content">
                  <div class="zone-name">Zones Expédition (×2)</div>
                  <div class="zone-desc">
                    <p>Deux zones, une pour l’<strong>Expédition Héros</strong> et une pour l’<strong>Expédition Compagnon</strong>. Lorsque vous jouez un Personnage, vous choisissez dans quelle Expédition le placer.</p>
                    <p>Les Personnages présents dans ces zones contribuent aux statistiques de l’Expédition au Crépuscule pour faire avancer le marqueur Expédition correspondant.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-3">
                <div class="zone-num">3</div>
                <div class="zone-content">
                  <div class="zone-name">Réserve</div>
                  <div class="zone-desc">
                    <p>Une zone <strong>face visible</strong> qui fonctionne comme une <strong>deuxième main</strong>. Les Personnages qui se reposent à la Nuit y arrivent, et les Sorts joués y sont envoyés après résolution.</p>
                    <p>Une carte en Réserve peut être rejouée en payant son <strong>Coût de Réserve</strong>, mais gagne alors <strong>Fugace</strong>. En phase Nuit, la Réserve est nettoyée pour n’y conserver que 2 cartes.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-4">
                <div class="zone-num">4</div>
                <div class="zone-content">
                  <div class="zone-name">Repères</div>
                  <div class="zone-desc">
                    <p>La zone où sont placés les <strong>Permanents de Repère</strong>. Contrairement aux Personnages, les Permanents restent en jeu d’un Jour à l’autre et continuent de produire leurs effets.</p>
                    <p>En phase Nuit, la zone des Repères est elle aussi nettoyée pour ne conserver que 2 Permanents.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-5">
                <div class="zone-num">5</div>
                <div class="zone-content">
                  <div class="zone-name">Mana</div>
                  <div class="zone-desc">
                    <p>La zone où sont placées les cartes utilisées comme <strong>Orbes de Mana</strong>. Une carte mise en Mana y reste <strong>face cachée jusqu’à la fin de la partie</strong>.</p>
                    <p>Chaque Orbe de Mana fournit 1 Mana lorsqu’il est épuisé. Tous vos Orbes sont redressés pendant la phase Matin.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-6">
                <div class="zone-num">6</div>
                <div class="zone-content">
                  <div class="zone-name">Deck</div>
                  <div class="zone-desc">
                    <p>Votre pioche, face cachée. Vous y piochez vos cartes au début de chaque Jour.</p>
                    <p>Si votre Deck est vide et que vous devez piocher, mélangez votre Défausse&nbsp;: elle devient votre nouveau Deck.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-7">
                <div class="zone-num">7</div>
                <div class="zone-content">
                  <div class="zone-name">Défausse</div>
                  <div class="zone-desc">
                    <p>Les cartes mises de côté en cours de partie&nbsp;: Personnages défaussés depuis la Réserve ou les Expéditions, Sorts Fugaces résolus, cartes excédentaires de la Réserve nettoyée à la Nuit, etc.</p>
                    <p>La Défausse est une zone <strong>face visible</strong>&nbsp;: vous pouvez la consulter à tout moment.</p>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <!-- ========== 6. DÉTAIL D’UNE CARTE ========== -->
          <section id="carte">
            <h2 class="section-title"><span>6. Détail d’une carte</span></h2>

            <div class="rule-block">
              <figure class="rule-figure float-right">
                <div class="card-anatomy">
                  <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_YZ_14_C.webp"
                       alt="Anatomie d’une carte Personnage : Flamel, avec les zones A à I annotées"
                       loading="lazy">
                  <span class="anno" style="top: 3%;  left: 50%;">A</span>
                  <span class="anno" style="top: 17%; left: 50%;">B</span>
                  <span class="anno" style="top: 5%;  left: 95%;">C</span>
                  <span class="anno" style="top: 12%;  left: 7%;">D</span>
                  <span class="anno" style="top: 15%; left: 26%;">E</span>
                  <span class="anno" style="top: 63%; left: 58%;">F</span>
                  <span class="anno" style="top: 82%; left:  7%;">G</span>
                  <span class="anno" style="top: 30%; left: 24%;">H</span>
                  <span class="anno" style="top: 66%; left:  7%;">I</span>
                </div>
                <figcaption>Anatomie d’une carte Personnage&nbsp;: zones A à I.</figcaption>
              </figure>

              <p>Il y a 4 types de cartes&nbsp;: <strong>Héros / Héroïnes</strong>, <strong>Personnages</strong>, <strong>Sorts</strong> et <strong>Permanents</strong>.</p>

              <h4>Sur toutes les cartes</h4>
              <ul>
                <li><strong>A — Nom</strong> de la carte</li>
                <li><strong>B — Type</strong> et sous-type(s)</li>
                <li><strong>C — Faction</strong> : il existe 6 factions différentes</li>
                <li><strong>D — Coût de Main</strong> : le coût en Mana lorsque la carte est jouée depuis votre main</li>
                <li><strong>E — Coût de Réserve</strong> : le coût en Mana lorsqu’elle est jouée depuis la Réserve</li>
                <li><strong>F — Capacités</strong> : les règles spéciales de la carte</li>
                <li><strong>G — Capacité de Soutien</strong> : capacité utilisable depuis la Réserve, présente sur certaines cartes</li>
              </ul>

              <h4>Sur les cartes Personnage uniquement</h4>
              <p>
				<strong>H —</strong> Les Personnages ont des <strong>statistiques</strong> correspondant aux trois terrains&nbsp;:&nbsp;
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="">Forêt</span>
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="">Montagne</span>
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="">Eau</span>
              </p>

              <div style="clear:both"></div>

              <h4>I — Capacités selon l’origine</h4>
              <p>Les cartes ont divers effets selon l’endroit depuis lequel elles sont jouées&nbsp;:</p>

              <div class="marker-grid">
                <div class="marker-item">
                  <div class="ic-circle ic-bg-anywhere"><i class="fak fa-altered-j"></i></div>
                  <div class="m-text">
                    <div class="m-desc"> Cet effet s’active <strong>quel que soit l’endroit</strong> depuis lequel la carte est jouée.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-hand"><i class="fak fa-altered-h"></i></div>
                  <div class="m-text">
                    <div class="m-desc"> Cet effet s’active lorsqu’elle est jouée <strong>depuis votre main</strong>.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-reserve"><i class="fak fa-altered-r"></i></div>
                  <div class="m-text">
                    <div class="m-desc">Cet effet s’active lorsqu’elle est jouée <strong>depuis votre Réserve</strong>.</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 7. TYPES DE CARTES ========== -->
          <section id="types-cartes">
            <h2 class="section-title"><span>7. Autres types de cartes</span></h2>

            <div class="row g-3">
              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Sorts</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_YZ_21_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    Lorsque vous jouez un Sort, résolvez tous ses effets, puis envoyez-le
                    <strong>immédiatement dans votre Réserve</strong>. Si vous jouez un Sort depuis votre
                    Réserve, il gagne <strong>Fugace</strong> : défaussez-le après la résolution.
                  </p>
                  <div class="rule-callout mb-0">
                    Certains Sorts sont <strong>automatiquement Fugaces</strong> : ils sont
                    directement défaussés après leurs effets.
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Permanents Repères</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/fr/CYCLONE/ALT_CYCLONE_B_MU_82_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    Lorsque vous jouez un Permanent Repère, <strong>placez-le dans votre zone Repère</strong>. Il ne retourne en
                    Réserve que si un effet de jeu l’indique.
                  </p>
                  <div class="rule-callout mb-0">
                    Tous les decks de démarrage ne contiennent pas forcément de Permanents Repères.
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Permanents d’Expédition</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/fr/ALIZE/ALT_ALIZE_B_BR_45_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    Lorsque vous jouez un Permanent d’Expédition, <strong>placez-le dans une de vos Expédition</strong>.
					<strong>Au repos</strong>, contrairement à un Personnage, <strong>un Permanent d’Expédition
					part en Réserve que si vous avez avancé sur cette Expédition.</strong>
                  </p>
                  <div class="rule-callout mb-0">
                    Tous les decks de démarrage ne contiennent pas forcément de Permanents d’Expédition.
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 6. UN JOUR D'EXPLORATION ========== -->
          <section id="jour">
            <h2 class="section-title"><span>8. Un jour d'exploration</span></h2>

            <div class="rule-block">
              <p>
                Une partie d'Altered se joue en plusieurs manches appelées <strong>Jours</strong>.
                Chaque Jour est composé de <strong>cinq phases</strong>&nbsp;:
              </p>

              <div class="phases-grid">
                <a class="phase-card" href="#phase-matin">
                  <div class="phase-num">Phase 1</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Matin</div>
                  <div class="phase-desc">Premier joueur, redresser, piocher, mettre une carte en Mana.</div>
                </a>
                <a class="phase-card" href="#phase-midi">
                  <div class="phase-num">Phase 2</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Midi</div>
                  <div class="phase-desc">Appliquer les effets « À Midi ».</div>
                </a>
                <a class="phase-card" href="#phase-apres-midi">
                  <div class="phase-num">Phase 3</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Après-midi</div>
                  <div class="phase-desc">Chacun votre tour, jouer une carte ou passer.</div>
                </a>
                <a class="phase-card" href="#phase-crepuscule">
                  <div class="phase-num">Phase 4</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Crépuscule</div>
                  <div class="phase-desc">Comparer les statistiques, faire avancer les Expéditions.</div>
                </a>
                <a class="phase-card" href="#phase-nuit">
                  <div class="phase-num">Phase 5</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Nuit</div>
                  <div class="phase-desc">Repos, nettoyage, vérification de la victoire.</div>
                </a>
              </div>
            </div>

            <!-- PHASE 1 -->
            <div class="rule-block">
              <h3 id="phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" class="phase-title-icon" loading="lazy"> Phase 1 — Matin</h3>
              <p>
                S'il s'agit du <strong>premier Jour</strong> de la partie, passez directement à la phase
                Midi. Sinon, suivez ces étapes&nbsp;:
              </p>
              <ol>
                <li>Placez le marqueur <strong>Premier Joueur</strong> dans l'autre camp.</li>
                <li>Redressez vos <strong>Orbes de Mana</strong> et vos cartes épuisées.</li>
                <li><strong>Piochez deux cartes</strong> dans votre deck.</li>
                <li>En commençant par le camp possédant le marqueur Premier Joueur, chaque joueur·se choisit de placer ou non <strong>une carte de sa main</strong> dans sa zone de Mana.</li>
              </ol>
            </div>

            <!-- PHASE 2 -->
            <div class="rule-block">
              <h3 id="phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" class="phase-title-icon" loading="lazy"> Phase 2 — Midi</h3>
              <p>Activez toutes les cartes en jeu avec un effet <strong>« À Midi »</strong>.</p>
              <div class="rule-callout">
                Tous les decks de démarrage ne contiennent pas forcément de cartes avec un effet « À Midi ».
              </div>
            </div>

            <!-- PHASE 3 -->
            <div class="rule-block">
              <h3 id="phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" class="phase-title-icon" loading="lazy"> Phase 3 — Après-midi</h3>
              <p>
                En commençant par le détenteur du marqueur Premier Joueur, les deux camps jouent
                <strong>chacun leur tour</strong>, <strong>une carte à la fois</strong>. 
              </p>
              <div class="rule-callout">
				<div>Dans Altered, <strong>1 tour = 1 carte</strong></div>
				<div>Dès qu'une carte a été jouée, l'autre joueur·se commence son tour.</div>
              </div>

              <h4>Structure d'un tour</h4>
              <div class="flow">
                <div class="flow-step">
                  <div class="step-num">ÉTAPE 1</div>
                  <div class="step-title">Actions rapides</div>
                  <div class="step-text">Effectuez autant d'<strong>actions rapides</strong> que vous le souhaitez.</div>
                </div>
                <div class="flow-step">
                  <div class="step-num">ÉTAPE 2</div>
                  <div class="step-title">Jouer ou passer</div>
                  <div class="step-text">Ensuite, <strong>jouez une carte</strong> OU <strong>passez</strong>.</div>
                </div>
              </div>

              <h4>Actions rapides</h4>
              <p>Il existe deux types d'actions rapides&nbsp;:</p>
              <ul>
                <li><strong>Capacité d'épuisement</strong> : présente sur certaines cartes Permanent ou Héros. <strong><i class="fak fa-altered-t"></i> Épuisez</strong> la carte pour activer son effet.</li>
                <li><strong>Capacité de Soutien</strong> : utilisable si la carte se trouve en Réserve. Pour l'activer, <strong><i class="fak fa-altered-d"></i> défaussez</strong> la carte depuis votre Réserve.</li>
              </ul>
              <div class="rule-callout tip">
                <strong>Rappel.</strong> Une action rapide ne compte pas comme une carte jouée et ne met
                pas fin à votre tour.
              </div>

              <h4>Jouer une carte</h4>
              <p>
                Pour jouer une carte, vous devez <strong><i class="fak fa-altered-t"></i> épuiser le nombre d'Orbes de Mana</strong>
                correspondant à son coût.
              </p>
              <ul>
                <li><strong>Jouer un Personnage</strong> : décidez dans quelle Expédition le placer (Héros ou Compagnon).</li>

				  <figure class="rule-figure" style="max-width: 380px; margin: 0.5rem auto 1.25rem;">
					<div class="play-character-illus" role="img"
						 aria-label="Jouer un Personnage : la carte peut rejoindre l'Expédition Héros ou l'Expédition Compagnon.">
					  <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="" loading="lazy">
					  <img class="pc-card pc-hero"
						   src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_01_C.webp"
						   alt="Carte Héros Sierra & Oddball" loading="lazy">
					  <img class="pc-card pc-played"
						   src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_08_C.webp"
						   alt="Carte Personnage en cours d'être jouée" loading="lazy">
					  <!-- viewBox aligné sur l'aspect du conteneur (256/147) pour éviter -->
					  <!-- toute distorsion des pointes de flèches. -->
					  <svg class="pc-arrows" viewBox="0 0 1024 588"
						   xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
						<defs>
						  <marker id="pc-arrow-head" viewBox="0 0 10 10" refX="8" refY="5"
								  markerWidth="4" markerHeight="4" orient="auto-start-reverse">
							<path d="M 0 0 L 10 5 L 0 10 z" fill="#f5c542" />
						  </marker>
						</defs>
						<!-- Sierra (w≈143, h≈215) centrée à (512, 143). AX (w≈205, h≈307) haut ≈ 269. -->
						<!-- Départ : 15 % à l'intérieur des coins supérieurs de la carte AX_08. -->
						<!-- Arrivée : 2 × largeur de Sierra à l'extérieur de chaque bord de Sierra. -->
						<path d="M 440 315 C 270 295, 200 210, 154 143"
							  stroke="#f5c542" stroke-width="12" fill="none"
							  stroke-linecap="round"
							  marker-end="url(#pc-arrow-head)" />
						<path d="M 584 315 C 754 295, 824 210, 871 143"
							  stroke="#f5c542" stroke-width="12" fill="none"
							  stroke-linecap="round"
							  marker-end="url(#pc-arrow-head)" />
					  </svg>
					</div>
				  </figure>
                <li><strong>Jouer un Sort</strong> : résolvez tous ses effets, puis envoyez-le immédiatement dans votre Réserve.</li>
                <li><strong>Jouer un Permanent Repère</strong> : placez la carte dans votre zone de Repères.</li>
                <li><strong>Jouer un Permanent d'Expédition</strong> : décidez dans quelle Expédition le placer (Héros ou Compagnon).</li>
                <li><strong>Jouer une carte depuis la Réserve</strong> : voir <a href="#reserve">La Réserve</a>.</li>
              </ul>
			  
			  <p>
				N'oubliez pas de résoudre les éventuels effets <i class="fak fa-altered-j"></i>, <i class="fak fa-altered-h"></i> ou <i class="fak fa-altered-r"></i>
				présents sur les Personnages et Permanents.
			  </p>

              <h4>Passer</h4>
              <p>
                Si vous ne pouvez pas ou ne souhaitez pas jouer de carte, vous pouvez <strong>passer</strong>.
                Vous ne pourrez alors plus jouer de tours jusqu'à la prochaine phase d'Après-midi.
                Quand vous passez, l'adversaire peut continuer à jouer. Une fois qu'il ou elle a
                également passé, la phase Crépuscule commence.
              </p>
            </div>

            <!-- PHASE 4 -->
            <div class="rule-block">
              <h3 id="phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" class="phase-title-icon" loading="lazy"> Phase 4 — Crépuscule</h3>
              <p>
                Pendant le Crépuscule, les deux camps <strong>comparent les statistiques</strong> des
                Personnages en jeu pour déterminer quels marqueurs Expédition peuvent avancer.
              </p>
              <p>En commençant par une Expédition (Héros ou Compagnon), effectuez les étapes suivantes&nbsp;:</p>

              <div class="flow">
                <div class="flow-step">
                  <div class="step-badge">A</div>
                  <div class="step-title">Vérifier les terrains</div>
                  <div class="step-text">Identifiez le ou les terrains
                    (<img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="Forêt" class="biome-ic">
                    <img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="Montagne" class="biome-ic">
                    <img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="Eau" class="biome-ic">)
                    de la région où se trouve votre marqueur.</div>
                </div>
                <div class="flow-step">
                  <div class="step-badge">B</div>
                  <div class="step-title">Additionner</div>
                  <div class="step-text">Pour chaque terrain, additionnez les statistiques correspondantes des Personnages de cette Expédition.</div>
                </div>
                <div class="flow-step">
                  <div class="step-badge">C</div>
                  <div class="step-title">Comparer &amp; avancer</div>
                  <div class="step-text">Si au moins un de vos totaux est <strong>strictement supérieur</strong> à celui de l'adversaire, votre Expédition avance d'une région.</div>
                </div>
              </div>

              <p>Procédez ensuite de la même manière pour l'Expédition restante. L'adversaire fait de même pour ses Expéditions.</p>

              <div class="rule-callout">
                <ul class="mb-0">
                  <li>Votre total doit être <strong>supérieur à 0</strong> pour pouvoir avancer.</li>
                  <li>Les Personnages <strong>Endormis</strong> <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="Marqueur Endormi" style="width: 1.6em; height: 1.6em; vertical-align: -0.25em;" loading="lazy"> ne sont pas pris en compte dans le calcul des statistiques.</li>
                  <li>Chaque Expédition ne peut avancer <strong>qu'une seule fois</strong> par phase Crépuscule.</li>
                  <li>Quand une Expédition se déplace sur une carte Tumulte face cachée, <strong>retournez-la face visible</strong>.</li>
                  <li>Vous comparez toujours votre <strong>Expédition Héros avec l'Expédition Héros adverse</strong>, même si les deux marqueurs ne sont pas dans la même région. Idem pour les Compagnons.</li>
                </ul>
              </div>

              <h4>Exemple — Pierre vs Noémie</h4>
              <figure class="rule-figure">
                <div class="dusk-composition" role="img"
                     aria-label="Exemple Crépuscule : Pierre joue un Personnage Muna, Noémie deux Personnages Axiom">

                  <!-- Étiquettes joueurs -->
                  <span class="dusk-player-label pierre">Pierre</span>
                  <span class="dusk-player-label noemie">Noémie</span>

                  <!-- Rangée 1 : Personnage de Pierre (Muna) + explication à droite -->
                  <div class="dusk-row-with-text">
                    <div class="dusk-character-row">
                      <div class="dusk-character-wrap">
                        <img class="dusk-character"
                             src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_MU_10_C.webp"
                             alt="Personnage Muna joué par Pierre"
                             loading="lazy">
                        <!-- <div class="dusk-highlight pierre"></div> -->
                      </div>
                    </div>
                    <aside class="dusk-side-text">
                      <p>
                        <span class="step-badge">A</span>
                        Le marqueur Expédition Héros de <strong>Pierre</strong> se trouve sur une carte avec
                        3 terrains&nbsp;:
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="">Forêt</span>
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="">Montagne</span>
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="">Eau</span>.
                        Pour avancer, le total de Pierre doit dépasser celui de Noémie dans au moins un de ces terrains.
                      </p>
                    </aside>
                  </div>

                  <!-- Rangée 2 : 2 cartes Aventure tournées + marqueurs -->
                  <div class="dusk-adventures">
                    <!-- Carte gauche : ADV_CARD_1 (Expédition Héros) avec marqueur Muna Héros au centre -->
                    <div class="adv-slot">
                      <img class="adv-card-dusk"
                           src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_1.png"
                           alt="" loading="lazy">
                      <img class="dusk-marker center"
                           src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                           alt="Marqueur Héros Muna" loading="lazy">
                    </div>
                    <!-- Carte droite : ADV_CARD_3 avec marqueur Axiom Héros au premier quart -->
                    <div class="adv-slot">
                      <img class="adv-card-dusk"
                           src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                           alt="" loading="lazy">
                      <img class="dusk-marker first-quarter"
                           src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                           alt="Marqueur Héros Axiom" loading="lazy">
                    </div>
                  </div>

                  <!-- Rangée 3 : 2 Personnages de Noémie superposés (Axiom) + explication à droite -->
                  <div class="dusk-row-with-text">
                    <div class="dusk-bottom-row">
                      <img class="dusk-character back"
                           src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_04_C.webp"
                           alt="Personnage Axiom joué par Noémie (arrière-plan)"
                           loading="lazy">
                      <img class="dusk-character front"
                           src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_08_C.webp"
                           alt="Personnage Axiom joué par Noémie (premier plan)"
                           loading="lazy">
                      <!-- <div class="dusk-highlight noemie"></div> -->
                    </div>
                    <aside class="dusk-side-text">
                      <p>
                        <span class="step-badge">A</span>
                        Du côté de Noémie, son marqueur Expédition Héros se trouve dans une région
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="">Forêt</span> et
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="">Eau</span>.
                        Pour avancer, le total de Noémie doit dépasser celui de Pierre dans au moins un de ces terrains.
                        Les statistiques en
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="">Montagne</span>
                        ne lui servent qu'à bloquer Pierre.
                      </p>
                    </aside>
                  </div>

                </div>
                <figcaption>Exemple complet&nbsp;: comparaison terrain par terrain, étapes A, B et C.</figcaption>
              </figure>

			  <p>
				Noémie ne peut donc pas avancer grâce à
				<span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="">Montagne</span>
				mais peut empêcher Pierre d'y avancer.
			  </p>

              <p>
                <span class="step-badge">B</span>
                On additionne ensuite les statistiques de chaque Expédition pour chacun de ces terrains&nbsp;:
              </p>

              <div class="table-responsive">
                <table class="example-table">
                  <thead>
                    <tr>
                      <th>Terrain</th>
                      <th class="center">Pierre</th>
                      <th class="center">Noémie</th>
                      <th>Résultat</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="">Forêt</span></td>
                      <td class="center"><strong>3</strong></td>
                      <td class="center">1+1 = 2</td>
                      <td><span class="text-success">✓</span> Pierre dépasse en Forêt</td>
                    </tr>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="">Montagne</span></td>
                      <td class="center">3</td>
                      <td class="center">3+1 = <strong>4</strong></td>
                      <td>✕ Noémie bloque Pierre</td>
                    </tr>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="">Eau</span></td>
                      <td class="center">3</td>
                      <td class="center">3+1 = <strong>4</strong></td>
                      <td><span class="text-success">✓</span> Noémie dépasse en Eau</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p>
                <span class="step-badge">C</span>
                Comme son total en <strong>Forêt</strong> dépasse celui de Noémie, le marqueur de
                Pierre avance. De son côté, comme son total en <strong>Eau</strong> dépasse celui de
                Pierre, le marqueur de Noémie avance également. Les deux joueurs progressent sur leur
				Expédition Héros ce Jour.
              </p>
            </div>

            <!-- PHASE 5 -->
            <div class="rule-block">
              <h3 id="phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" class="phase-title-icon" loading="lazy"> Phase 5 — Nuit</h3>
			  
              <figure class="rule-figure">
                <div class="cleanup-illus" role="img"
                     aria-label="Phase Nuit : pendant le Repos, les Personnages quittent les Expéditions pour rejoindre la Réserve (ou la défausse s'ils sont Fugaces) ; pendant le Nettoyage, l'excédent de la Réserve et des Repères est défaussé pour ne garder que 2 cartes par zone.">

                  <div class="cleanup-playmat">
                    <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Tapis de jeu Altered">

                    <!-- Expédition gauche : 2 Personnages épuisés -->
                    <img class="cleanup-card cl-exp-l1 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_04_C.webp"
                         alt="Personnage sur l'Expédition gauche" loading="lazy">
                    <img class="cleanup-card cl-exp-l2 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_08_C.webp"
                         alt="Personnage sur l'Expédition gauche" loading="lazy">

                    <!-- Carte Héros : Sierra & Oddball -->
                    <img class="cleanup-card cl-hero"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_01_C.webp"
                         alt="Carte Héros Sierra & Oddball placée sur la zone Héros" loading="lazy">

                    <!-- Deck face cachée -->
                    <img class="cleanup-card cl-deck"
                         src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                         alt="Deck face cachée sur la zone Deck" loading="lazy">

                    <!-- Expédition droite : Personnage avec marqueur Fugace (gauche) + Scarabot (droite) -->
                    <img class="cleanup-card cl-exp-r cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_16_R1.webp"
                         alt="Personnage devenu Fugace sur l'Expédition droite" loading="lazy">
                    <img class="cleanup-card cl-exp-r2 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp"
                         alt="Scarabot Fugace sur l'Expédition droite" loading="lazy">
                    <img class="cleanup-marker cl-fugace"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png"
                         alt="Marqueur Fugace" loading="lazy">

                    <!-- Réserve : 3 cartes (excédent) -->
                    <img class="cleanup-card cl-res-1"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_13_C.webp"
                         alt="Carte de Réserve" loading="lazy">
                    <img class="cleanup-card cl-res-2"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_04_C.webp"
                         alt="Carte de Réserve" loading="lazy">
                    <img class="cleanup-card cl-res-3"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_08_C.webp"
                         alt="Carte de Réserve (excédent)" loading="lazy">

                    <!-- Repères : 3 cartes (excédent) -->
                    <img class="cleanup-card cl-lm-1"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_24_C.webp"
                         alt="Repère (excédent)" loading="lazy">
                    <img class="cleanup-card cl-lm-2"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_25_C.webp"
                         alt="Repère" loading="lazy">
                    <img class="cleanup-card cl-lm-3"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_30_R1.webp"
                         alt="Repère" loading="lazy">
                  </div>

                  <!-- Carte Fugace défaussée, hors du tapis -->
                  <div class="cleanup-outside">
                    <img class="cleanup-card cl-outside-card"
                         src="<?= CDN_URL ?>/cards/fr/CORE/ALT_CORE_B_AX_31_C.webp"
                         alt="Personnage Fugace défaussé hors du tapis" loading="lazy">
                  </div>

                  <!-- Flèches SVG (en overlay).
                       viewBox 1984×1000 ≈ ratio de la composition (1024×600 du tapis + 14% à droite).
                       Coordonnées en unités viewBox : 1% largeur ≈ 19.84 ; 1% hauteur ≈ 10.
                       Les points sont volontairement décalés à l'intérieur des cartes. -->
                  <svg class="cleanup-arrows" aria-hidden="true"
                       viewBox="0 0 1984 1000" preserveAspectRatio="none"
                       xmlns="http://www.w3.org/2000/svg">
                    <defs>
                      <marker id="ah-yellow" viewBox="0 0 10 10" refX="10" refY="5"
                              markerWidth="5" markerHeight="5" orient="auto-start-reverse">
                        <path d="M0,0 L10,5 L0,10 z" fill="#f5c542" />
                      </marker>
                      <marker id="ah-blue" viewBox="0 0 10 10" refX="10" refY="5"
                              markerWidth="5" markerHeight="5" orient="auto-start-reverse">
                        <path d="M0,0 L10,5 L0,10 z" fill="#2196f3" />
                      </marker>
                    </defs>

                    <!-- Flèches jaunes : Repos (Expédition → Réserve / hors-tapis) -->
                    <path d="M 137 285 Q 230 334 290 421"
                          stroke="#f5c542" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-yellow)" />
                    <path d="M 324 285 Q 418 334 478 421"
                          stroke="#f5c542" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-yellow)" />
                    <path d="M 1638 208 Q 1715 220 1792 243"
                          stroke="#f5c542" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-yellow)" />

                    <!-- Flèches bleues : Nettoyage (Réserve / Repère → Discard)
                         Cibles inversées : la Réserve va en bas-droite, le Repère en haut-gauche. -->
                    <path d="M 478 560 Q 1024 630 1570 800"
                          stroke="#2196f3" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-blue)" />
                    <path d="M 1228 560 Q 1384 600 1540 720"
                          stroke="#2196f3" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-blue)" />
                    <!-- Personnage Fugace en Expédition droite : défausse au Repos (Fugace) -->
                    <path d="M 1399 285 Q 1500 488 1605 690"
                          stroke="#f5c542" stroke-width="4" stroke-linecap="round"
                          fill="none" vector-effect="non-scaling-stroke"
                          marker-end="url(#ah-yellow)" />
                  </svg>

                  <!-- Labels -->
                  <div class="cleanup-label cleanup-label--repos">Repos</div>
                  <div class="cleanup-label cleanup-label--nettoyage">Nettoyage</div>

                </div>
                <figcaption>
                  Au <strong>Repos</strong>, les Personnages vont en Réserve (ou sont défaussés s'ils sont Fugaces); les cartes jetons sont mis de côté.<br/>
				  Au <strong>Nettoyage</strong>, on défausse l'excédent de la Réserve et des Repères pour n'en garder que 2 par zone.
                </figcaption>
              </figure>

              <h4>Repos</h4>
              <p>
                Envoyez <strong>tous les Personnages</strong> de vos Expéditions dans votre Réserve.
              </p>
              <ul>
				<li>S'ils sont <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Fugaces</strong>, défaussez-les à la place.</li>
                <li>Les marqueurs <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Boost</strong> sont retirés de la carte avant qu'elle ne rejoigne la Réserve.</li>
                <li>Les cartes portant un marqueur <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Endormi</strong> ou <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Ancré</strong> ne vont pas en Réserve&nbsp;: elles perdent leur marqueur Endormi/Ancré à la place et restent en Expédition.</li>
              </ul>
			  <p>
				Envoyez en Réserve <strong>tous les Permanents d'Expédition</strong> placés dans une <strong>Expédition qui a avancé</strong>.
			  </p>
			  <p>
				Mettez de côté, et non en Réserve, les <strong>cartes jetons</strong> de vos Expéditions.

              <h4>Nettoyage</h4>
              <ul>
                <li>Si vous avez 3 cartes ou plus dans votre <strong>Réserve</strong>, défaussez l'excédent pour ne conserver que <strong>2 cartes</strong> de votre choix.</li>
                <li>De même, sacrifiez les cartes de vos <strong>Repères</strong> pour n'en garder que 2.</li>
              </ul>

              <div class="rule-callout tip">
                Pendant les autres phases du Jour, il n'y a pas de limite au nombre de cartes
                présentes dans la Réserve et la zone des Repères.
              </div>

              <h4>Vérifiez la victoire</h4>
              <p>Voir <a href="#fin-partie">Fin de la partie</a>.</p>

              <div class="rule-callout text-center">
                Ce Jour est maintenant terminé. <strong>Démarrez un nouveau Jour</strong>, en
                commençant par la phase Matin.
              </div>
            </div>
          </section>

          <!-- ========== 6. LA RÉSERVE ========== -->
          <section id="reserve">
            <h2 class="section-title"><span>9. La Réserve</span></h2>

            <div class="rule-block">
              <p>
                La Réserve est une <strong>zone face visible</strong> qui fonctionne comme une
                <strong>deuxième main</strong>.
              </p>

              <h4>Jouer une carte depuis la Réserve</h4>
              <p>
                Une carte dans votre Réserve peut être jouée comme si elle était dans votre main,
                à deux différences près&nbsp;:
              </p>
              <ul>
                <li>Vous devez payer son <strong>Coût de Réserve</strong> au lieu de son Coût de Main.</li>
                <li>Une carte jouée depuis la Réserve gagne <strong>Fugace</strong> (sauf s'il s'agit d'un Permanent de Repère).</li>
              </ul>

              <h4>Fugace</h4>
              <p>
                Si une carte Fugace devait être normalement envoyée dans la Réserve, <strong>défaussez-la
                à la place</strong>. Pour les Personnages : placez un marqueur Fugace sur le
                Personnage pour vous en rappeler.
              </p>

              <div class="rule-callout warn">
                <strong>Important — ciblage.</strong> Les cartes dans la Réserve ne sont pas
                « contrôlées »&nbsp;: leurs capacités ne s'appliquent pas et elles ne peuvent pas être
                ciblées par une capacité qui ne mentionne pas <strong>explicitement</strong> la Réserve.
                <br><br>
                Une carte portant la mention « Défaussez un Personnage ciblé » <em>ne peut pas</em>
                cibler un Personnage dans la Réserve, mais une carte portant la mention « Défaussez une
                carte ciblée dans une Réserve » le peut.
              </div>
            </div>
          </section>

          <!-- ========== 10. FIN DE LA PARTIE ========== -->
          <section id="fin-partie">
            <h2 class="section-title"><span>10. Fin de la partie</span></h2>

            <div class="rule-block">
              <p class="fs-5">
                <i class="fa-solid fa-trophy text-warning"></i>
                Le premier qui parvient à <strong>réunir son Expédition Héros et son Expédition
                Compagnon</strong> gagne la partie à la fin du Jour.
              </p>

              <h4>En cas d'égalité</h4>
              <figure class="rule-figure float-right small">
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Carte Aventure Tumulte : le marqueur Héros Muna a avancé plus que nécessaire, les autres marqueurs sont encore séparés">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                         alt="" loading="lazy">
                    <!-- Muna Héros : pleine opacité (marqueur gagnant) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 10%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Marqueur Héros Muna" loading="lazy">
                    <!-- Muna Compagnon : haut droite, estompé (position de départ) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; right: 10%; left: auto; opacity: 0.5;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Marqueur Compagnon Muna (départ)" loading="lazy">
                    <!-- Muna Compagnon : arrivée, pleine opacité — left:20% → centre x=72 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 20%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Marqueur Compagnon Muna (arrivée)" loading="lazy">
                    <!-- Flèche jaune courbe centre-à-centre entre les deux Compagnons Muna -->
                    <svg style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                                overflow: visible; pointer-events: none; z-index: 4;"
                         viewBox="0 0 224 160">
                      <defs>
                        <!-- refX="10" : la pointe (x=14) dépasse de 4u au-delà du point d'arrivée -->
                        <marker id="arrow-muna-jump" markerWidth="14" markerHeight="10"
                                refX="10" refY="5" orient="auto" markerUnits="userSpaceOnUse">
                          <polygon points="0 0, 14 5, 0 10" fill="#f5c542"/>
                        </marker>
                      </defs>
                      <!-- Source (174,77) → destination (72,77) ; ctrl y=30 pour courbe douce -->
                      <path d="M 174 77 Q 123 30 72 77"
                            fill="none" stroke="#f5c542" stroke-width="5"
                            marker-end="url(#arrow-muna-jump)"/>
                    </svg>
                    <!-- Axiom Héros : bas gauche, estompé (position de départ) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: 7%; opacity: 0.5;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Marqueur Héros Axiom (départ)" loading="lazy">
                    <!-- Axiom Héros : arrivée — right:20% → centre x=152 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; right: 20%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Marqueur Héros Axiom (arrivée)" loading="lazy">
                    <!-- Flèche jaune courbe vers le bas, de l'Axiom Héros gauche (x=43) vers droite (x=152) -->
                    <svg style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                                overflow: visible; pointer-events: none; z-index: 4;"
                         viewBox="0 0 224 160">
                      <defs>
                        <marker id="arrow-axiom-hero-jump" markerWidth="14" markerHeight="10"
                                refX="10" refY="5" orient="auto" markerUnits="userSpaceOnUse">
                          <polygon points="0 0, 14 5, 0 10" fill="#f5c542"/>
                        </marker>
                      </defs>
                      <!-- Source (43,141) → destination (152,141) ; ctrl y=185 pour arc vers le bas -->
                      <path d="M 43 141 Q 98 185 152 141"
                            fill="none" stroke="#f5c542" stroke-width="5"
                            marker-end="url(#arrow-axiom-hero-jump)"/>
                    </svg>
                    <!-- Axiom Compagnon : bas droite, estompé (position de départ) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; right: 7%; left: auto; opacity: 0.5;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Marqueur Compagnon Axiom (départ)" loading="lazy">
                    <!-- Axiom Compagnon : arrivée à droite du Héros — left:20% → centre x=72 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: 20%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Marqueur Compagnon Axiom (arrivée)" loading="lazy">
                    <!-- Flèche jaune courbe centre-à-centre entre les deux Compagnons Axiom -->
                    <svg style="position: absolute; top: 0; left: 0; width: 100%; height: 100%;
                                overflow: visible; pointer-events: none; z-index: 4;"
                         viewBox="0 0 224 160">
                      <defs>
                        <marker id="arrow-axiom-jump" markerWidth="14" markerHeight="10"
                                refX="10" refY="5" orient="auto" markerUnits="userSpaceOnUse">
                          <polygon points="0 0, 14 5, 0 10" fill="#f5c542"/>
                        </marker>
                      </defs>
                      <!-- Source (181,141) → destination (72,141) ; ctrl y=100 pour courbe douce vers le haut -->
                      <path d="M 181 141 Q 127 100 72 141"
                            fill="none" stroke="#f5c542" stroke-width="5"
                            marker-end="url(#arrow-axiom-jump)"/>
                    </svg>
                  </div>
                </div>
                <figcaption>Noémie avance plus que nécessaire et gagne&nbsp;!</figcaption>
              </figure>
              <p>
                Si les marqueurs des deux adversaires se sont rejoints le <strong>même Jour</strong>,
                vérifiez d'abord si l'un d'eux a <strong>avancé plus que nécessaire</strong>. Si c'est
                le cas pour l'un et non pour l'autre, celui qui l'a fait gagne la partie.
              </p>

              <div class="rule-callout tip">
                <strong>Exemple.</strong> Les Expéditions de Noémie et Pierre sont toutes les deux sur
                le point de se rejoindre. Pendant le Crépuscule, les deux Expéditions de Noémie avancent
                et se croisent, tandis que seule l'Expédition Compagnon de Pierre avance. Noémie a
                avancé plus que nécessaire et gagne donc la partie.
              </div>

              <div style="clear:both"></div>

              <h4>L'Arène — départage ultime</h4>
              <figure class="rule-figure float-right small">
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Carte Arène avec les quatre marqueurs Expédition Muna et Axiom">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_5-B.png"
                         alt="" loading="lazy">
                    <!-- Muna Héros : haut gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 33%; left: 16%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Marqueur Héros Muna" loading="lazy">
                    <!-- Axiom Héros : haut droite -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: auto; bottom: -5%; right: auto; left: 16%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Marqueur Héros Axiom" loading="lazy">
                    <!-- Muna Compagnon : bas gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 33%; bottom: auto; right: 15%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Marqueur Compagnon Muna" loading="lazy">
                    <!-- Axiom Compagnon : bas droite -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: auto; bottom: -5%; right: 15%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Marqueur Compagnon Axiom" loading="lazy">
                  </div>
                </div>
                <figcaption>L'Arène, au dos de la carte région de départ Compagnon.</figcaption>
              </figure>
              <p>
                Dans le cas contraire, jouez un <strong>Jour supplémentaire dans l'Arène</strong> pour
                les départager. L'Arène se trouve au dos de la carte région de départ Compagnon :
                posez-la au centre de la table, placez-y les marqueurs Expédition des deux camps,
                et retirez du jeu les autres cartes Aventure.
              </p>
              <p>
                Puis, jouez un Jour normalement. Au Crépuscule, pour chaque terrain de l'Arène
                (<img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="Forêt" class="biome-ic">
                <img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="Montagne" class="biome-ic">
                <img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="Eau" class="biome-ic">),
                additionnez les statistiques des Personnages de <strong>vos deux Expéditions</strong>.
                Comparez les trois totaux avec ceux de l'adversaire : celui ou celle qui l'emporte
                dans le plus grand nombre de terrains gagne.
              </p>
              <p class="mb-0">Si les deux camps sont de nouveau à égalité, <strong>recommencez un nouveau Jour</strong> dans l'Arène.</p>
              <div style="clear:both"></div>
            </div>
          </section>

          <!-- ========== 9. RÈGLES SUPPLÉMENTAIRES ========== -->
          <section id="regles-sup">
            <h2 class="section-title"><span>11. Règles supplémentaires</span></h2>

            <div class="row g-3">
              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Capacités des cartes</h3>
                  <p class="mb-0">
                    Si les capacités d'une carte <strong>contredisent</strong> les règles générales,
                    suivez ce qui est écrit sur la carte.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Cibler</h3>
                  <p>
                    Les capacités des cartes ciblent par défaut <strong>les cartes en jeu</strong> :
                    Personnages dans une Expédition ou Permanents dans la zone des Repères.
                  </p>
                  <p class="mb-0">
                    Les cartes dans la Réserve <strong>ne sont pas contrôlées</strong> et ne peuvent être
                    ciblées que par une capacité mentionnant <strong>explicitement la Réserve</strong>.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Plus de cartes dans votre deck&nbsp;?</h3>
                  <p class="mb-0">
                    <strong>À Midi uniquement</strong>, si votre deck est vide, <strong>mélangez votre défausse</strong>,
					qui devient alors votre nouveau deck. Ensuite, piochez le nombre de cartes nécessaire.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Permanent depuis la Réserve</h3>
                  <p class="mb-0">
                    Si vous jouez un <strong>Permanent de Repère</strong> depuis la Réserve, payez son
                    Coût de Réserve. Il <strong>ne gagne pas Fugace</strong>.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>« À Midi », « Au Crépuscule », « À la Tombée de la Nuit »</h3>
                  <p class="mb-0">
                    Ces capacités se déclenchent au <strong>début</strong> de leur phase respective.
                    Le camp détenant le marqueur Premier Joueur résout les siennes en premier,
                    dans l'ordre de son choix.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>« Je » dans les capacités</h3>
                  <p class="mb-0">
                    Les cartes utilisent <strong>« je »</strong> pour se désigner elles-mêmes.
                    Par exemple, « Je gagne 2 boosts » signifie « Cette carte gagne 2 boosts ».
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Capacité de Soutien</h3>
                  <p class="mb-0">
                    Une capacité de Soutien se déclenche <strong>uniquement lorsque vous défaussez la
                    carte en action rapide</strong>, pas si la carte est défaussée pour une autre raison
                    (par exemple si vous avez trop de cartes en Réserve pendant la Nuit).
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Cartes jetons</h3>
                  <p>
                    Les cartes jetons ne démarrent pas dans votre deck mais sont <strong>créés par d'autres cartes</strong>.
                  </p>
                  <p class="mb-0">
                    Lorsqu'un jeton quitte la zone associée, il est <strong>retiré du jeu</strong>, même
                    si une carte vous dit d'en faire autre chose&nbsp;!
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 10. MARQUEURS & ICÔNES ========== -->
          <section id="marqueurs">
            <h2 class="section-title"><span>12. Marqueurs &amp; icônes</span></h2>

            <div class="rule-block">
              <h3>Marqueurs de jeu</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png" alt="Marqueur Premier Joueur">
                  <div class="m-text">
                    <div class="m-label">Premier Joueur</div>
                    <div class="m-desc">Indique qui commence le tour. Change chaque Matin.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="Marqueur Boost +1">
                  <div class="m-text">
                    <div class="m-label">Boost +1</div>
                    <div class="m-desc">Augmente les <strong>trois statistiques</strong> de 1.<br/>Retirés quand le Personnage quitte les Expéditions.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png" alt="Marqueur Boost +2">
                  <div class="m-text">
                    <div class="m-label">Boost +2</div>
                    <div class="m-desc">Augmente les trois statistiques de 2.<br/>Retirés quand le Personnage quitte les Expéditions.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="Marqueur Fugace">
                  <div class="m-text">
                    <div class="m-label">Fugace</div>
                    <div class="m-desc">Si une carte Fugace est envoyée en Réserve, alors cette carte est défaussée à la place. Cela s'applique pour le Repos ou suite à un effet en cours de jeu.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="Marqueur Ancré">
                  <div class="m-text">
                    <div class="m-label">Ancré</div>
                    <div class="m-desc">Marqueur posé sur un Personnage. <strong>Au Repos</strong>, un Personnage Ancré <strong>ne part pas en Réserve</strong> mais perd son marqueur Ancré à la place.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="Marqueur Endormi">
                  <div class="m-text">
                    <div class="m-label">Endormi</div>
                    <div class="m-desc">Marqueur posé sur un Personnage. Un Personnage Endormi <strong>n'est pas pris en compte pour la phase d'avancée au Crépuscule</strong>. <strong>Au Repos</strong>, un Personnage Endormi <strong>ne part pas en Réserve</strong> mais perd son marqueur Endormi à la place.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rule-block">
              <h3>Icônes des cartes</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <div class="ic-circle ic-bg-anywhere"><i class="fak fa-altered-j"></i></div>
                  <div class="m-text">
                    <div class="m-label">Effet «&nbsp;de partout&nbsp;»</div>
                    <div class="m-desc">Capacité active d'où que soit jouée la carte.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-hand"><i class="fak fa-altered-h"></i></div>
                  <div class="m-text">
                    <div class="m-label">Effet «&nbsp;depuis la main&nbsp;»</div>
                    <div class="m-desc">Capacité active uniquement lorsque jouée de la main.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-reserve"><i class="fak fa-altered-r"></i></div>
                  <div class="m-text">
                    <div class="m-label">Effet «&nbsp;depuis la Réserve&nbsp;»</div>
                    <div class="m-desc">Capacité active uniquement lorsque jouée de la Réserve.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-epuiser"><i class="fak fa-altered-t"></i></div>
                  <div class="m-text">
                    <div class="m-label">Épuiser</div>
                    <div class="m-desc">Tourner la carte pour activer son effet.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-defausse"><i class="fak fa-altered-d"></i></div>
                  <div class="m-text">
                    <div class="m-label">Soutien</div>
                    <div class="m-desc">Défausse la carte pour activer son effet de Soutien.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-permanent"><i class="fak fa-altered-i"></i></div>
                  <div class="m-text">
                    <div class="m-label">Soutien continu</div>
                    <div class="m-desc">Indique une Capacité de Soutien qui s'applique en continu, sans avoir à défausser la carte.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rule-block">
              <h3>Terrains</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/F.webp" alt="Forêt">
                  <div class="m-text">
                    <div class="m-label">Forêt</div>
                    <div class="m-desc">Statistique de Forêt sur les Personnages.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/M.webp" alt="Montagne">
                  <div class="m-text">
                    <div class="m-label">Montagne</div>
                    <div class="m-desc">Statistique de Montagne sur les Personnages.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/plugins/rules/assets/O.webp" alt="Eau">
                  <div class="m-text">
                    <div class="m-label">Eau</div>
                    <div class="m-desc">Statistique d'Eau sur les Personnages.</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 13. MOTS-CLÉS ========== -->
          <section id="mots-cles">
            <h2 class="section-title"><span>13. Mots-clés</span></h2>

            <div class="rule-block">
              <p>
                Glossaire des mots-clés rencontrés sur les cartes des extensions&nbsp;1 à&nbsp;5.
                Le terme anglais figurant sur les cartes est indiqué entre parenthèses.
              </p>
              <ul class="keywords-glossary">
                <li id="seasoned"><strong>Aguerri</strong> <span class="kw-en">(Seasoned)</span> — Un Personnage Aguerri garde ses boosts lorsqu'il est envoyé en Réserve depuis la zone d'Expédition.</li>
                <li id="augment"><strong>Amplifier</strong> <span class="kw-en">(Augment)</span> — Si la carte ciblée possède au moins un marqueur (Boost, etc.), elle en gagne un de plus. Les cartes Héros ne peuvent pas être ciblées.</li>
                <li id="anchored"><strong>Ancré</strong> <span class="kw-en">(Anchored)</span> — Au Repos, un Personnage Ancré n'est pas envoyé en Réserve&nbsp;; il perd Ancré à la place.</li>
                <li id="support-ability"><strong>Capacité de Soutien</strong> <span class="kw-en">(Support ability)</span> — Écrite au bas de certaines cartes, sur fond coloré, la Capacité de Soutien nécessite que la carte soit en Réserve. Elle peut nécessiter d'être défaussée (<i class="fak fa-altered-d"></i>) pour déclencher son effet, ou s'appliquer en continu (<i class="fak fa-altered-i"></i>).</li>
                <li id="tough-x"><strong>Coriace X</strong> <span class="kw-en">(Tough X)</span> — Un adversaire ne peut pas choisir un objet Coriace X comme cible d'un effet qu'il contrôle à moins de payer X manas supplémentaires.</li>
                <li id="defender"><strong>Défenseur</strong> <span class="kw-en">(Defender)</span> — Une Expédition contenant un Personnage avec Défenseur ne peut pas avancer au Crépuscule.</li>
                <li id="gift"><strong>Don</strong> <span class="kw-en">(Gift)</span> — Vous faites un Don si, durant votre tour, un adversaire pioche une carte, Ravitaille ou reçoit un jeton grâce à un effet d'une carte que vous contrôlez.</li>
                <li id="ascend"><strong>Élevé</strong> <span class="kw-en">(Ascend)</span> — Jusqu'au Repos, une Expédition Élevée peut avancer même en cas de statistiques égales à l'Expédition adverse sur les terrains de sa région. Elle ne peut toujours pas avancer avec des statistiques de&nbsp;0.</li>
                <li id="in-contact"><strong>En Contact</strong> <span class="kw-en">(In Contact)</span> — Un Personnage est En Contact si une des Expéditions de l'adversaire est dans la région de ce Personnage.</li>
                <li id="asleep"><strong>Endormi</strong> <span class="kw-en">(Asleep)</span> — Les statistiques d'un Personnage Endormi ne sont pas comptées au Crépuscule. Au Repos, un Personnage Endormi n'est pas envoyé en Réserve&nbsp;; il perd Endormi à la place.</li>
                <li id="exhaust"><strong>Épuiser</strong> <span class="kw-en">(Exhaust)</span> — Une carte épuisée (tournée à 90°) en Réserve ne peut pas être jouée et n'a plus de capacités de Soutien.</li>
                <li id="eternal"><strong>Éternel</strong> <span class="kw-en">(Eternal)</span> — Un Personnage Éternel n'est pas envoyé en Réserve au Repos.</li>
                <li id="rush"><strong>Foncer</strong> <span class="kw-en">(Rush)</span> — Jouez immédiatement une autre carte.</li>
                <li id="fleeting"><strong>Fugace</strong> <span class="kw-en">(Fleeting)</span> — Si une carte Fugace est envoyée en Réserve, alors cette carte est défaussée à la place. Cela s'applique pour le Repos ou suite à un effet en cours de jeu. Toutes les cartes jouées depuis la Réserve gagnent Fugace, à l'exception des Permanents Repère.</li>
                <li id="gigantic"><strong>Gigantesque</strong> <span class="kw-en">(Gigantic)</span> — Un Personnage Gigantesque est présent dans vos deux Expéditions.</li>
                <li id="cooldown"><strong>Rafraîchissement</strong> <span class="kw-en">(Cooldown)</span> — Si la carte part en Réserve après la résolution de son effet, épuisez-la.</li>
                <li id="resupply"><strong>Ravitailler</strong> <span class="kw-en">(Resupply)</span> — Placez la carte du dessus de votre Deck dans votre Réserve.</li>
                <li id="exhausted-resupply"><strong>Ravitailler épuisé</strong> <span class="kw-en">(Exhausted Resupply)</span> — Ravitaillez, puis épuisez la carte ravitaillée.</li>
                <li id="scout-x"><strong>Repérage X</strong> <span class="kw-en">(Scout X)</span> — Cette carte peut être jouée depuis votre Main pour X manas avec l'effet supplémentaire <em><i class="fak fa-altered-h"></i> Envoyez-moi en Réserve</em>.</li>
                <li id="sabotage"><strong>Saboter</strong> <span class="kw-en">(Sabotage)</span> — Défaussez une carte ciblée d'une Réserve.</li>
                <li id="sacrifice"><strong>Sacrifier</strong> <span class="kw-en">(Sacrifice)</span> — Défaussez une carte ciblée d'une de vos Expéditions ou de votre zone Repère.</li>
                <li id="defect"><strong>Trahir</strong> <span class="kw-en">(Defect)</span> — Un Personnage qui Trahit rejoint l'Expédition qui lui fait face et change de contrôleur (mais pas de propriétaire).</li>
              </ul>
            </div>
          </section>

          <!-- Retour en haut -->
          <div class="text-center mt-4">
            <a href="#" class="btn btn-primary-altered">
              <i class="fa-solid fa-arrow-up"></i> Retour en haut
            </a>
          </div>

    </div>
  </div>
</div>

