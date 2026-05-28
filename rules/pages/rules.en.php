
<!-- En-tête article -->
    <div class="news-detail-header">
      <h1 class="news-detail-title">Altered TCG Quick Rules</h1>
    </div>

    <div class="row">

      <!-- Sommaire latéral (desktop) -->
      <aside class="col-lg-3 d-none d-lg-block">
        <nav class="rules-toc" aria-label="Contents">
          <h6>
            <img src="<?= CDN_URL ?>/marketing/altered/altered-symbol-color.png" alt="">
            Contents
          </h6>
          <ol>
            <li><a href="#presentation">Presentation</a></li>
            <li><a href="#materiel">Material</a></li>
            <li><a href="#mise-en-place">Setup</a></li>
            <li><a href="#mana">Mana Orbs</a></li>
            <li><a href="#zones">Game zones</a></li>
            <li><a href="#carte">Parts of a card</a></li>
            <li><a href="#types-cartes">Card types</a></li>
            <li>
              <a href="#jour">A day of exploration</a>
              <ul class="rules-toc-sub">
                <li><a href="#phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy">Morning</a></li>
                <li><a href="#phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy">Noon</a></li>
                <li><a href="#phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy">Afternoon</a></li>
                <li><a href="#phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy">Dusk</a></li>
                <li><a href="#phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy">Night</a></li>
              </ul>
            </li>
            <li><a href="#reserve">The Reserve</a></li>
            <li><a href="#fin-partie">Ending the game</a></li>
            <li><a href="#regles-sup">Additional rules</a></li>
            <li><a href="#marqueurs">Markers &amp; icons</a></li>
            <li><a href="#mots-cles">Keywords</a></li>
          </ol>
        </nav>
      </aside>

      <!-- Contenu principal -->
      <div class="col-lg-9">
        <div class="news-detail-content">

          <p class="lead">
            Welcome to <strong>Altered</strong>, a trading card game in which you lead
            two Expeditions across lands transformed by the Tumult. Your goal&nbsp;:
            <strong>reunite your two Expeditions before your opponent does</strong>.
          </p>
		  <p class="lead">
			This page is an expanded transcription of the <em>“Altered TCG — Quick Rules 3.0”</em>
			booklet published by Equinox (2025). <br />
			<a href="<?= BASE_URL ?>/plugins/rules/assets/Altered_Complete_Rules_5.0.pdf" target="_blank" rel="noopener">
			  <i class="fa-solid fa-file-pdf"></i>
			  Download the complete rules (PDF, v5.0) — English only
			</a>
		  </p>

          <!-- Sommaire mobile -->
          <div class="d-lg-none mb-4">
            <details class="rule-block">
              <summary class="fw-bold" style="cursor:pointer;">📑 View contents</summary>
              <ol class="mt-3 mb-0">
                <li><a href="#presentation">Presentation</a></li>
                <li><a href="#materiel">Material</a></li>
                <li><a href="#mise-en-place">Setup</a></li>
                <li><a href="#mana">Mana Orbs</a></li>
                <li><a href="#zones">Game zones</a></li>
                <li><a href="#carte">Parts of a card</a></li>
                <li><a href="#types-cartes">Card types</a></li>
                <li>
                  <a href="#jour">A day of exploration</a>
                  <ul class="rules-toc-sub">
                    <li><a href="#phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy">Morning</a></li>
                    <li><a href="#phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy">Noon</a></li>
                    <li><a href="#phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy">Afternoon</a></li>
                    <li><a href="#phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy">Dusk</a></li>
                    <li><a href="#phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy">Night</a></li>
                  </ul>
                </li>
                <li><a href="#reserve">The Reserve</a></li>
                <li><a href="#fin-partie">Ending the game</a></li>
                <li><a href="#regles-sup">Additional rules</a></li>
                <li><a href="#marqueurs">Markers &amp; icons</a></li>
                <li><a href="#construction">Deckbuilding</a></li>
                <li><a href="#mots-cles">Keywords</a></li>
              </ol>
            </details>
          </div>

          <!-- ========== 1. PRÉSENTATION ========== -->
          <section id="presentation">
            <h2 class="section-title"><span>1. Presentation</span></h2>

            <div class="rule-block">
              <figure class="rule-figure float-right wide">
                <!-- Les marqueurs PNG utilisent .dusk-marker (scoped à .dusk-adventures) qui
                     neutralise le fond blanc imposé par le thème Azure.
                     Le cadre jaune est un <svg> pour éviter tout fond CSS. -->
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Tumult Adventure card with Expedition markers: the two Axiom markers are reunited, the Muna markers are separated">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <!-- ADV_CARD_3 tournée +90° — width: 160px pour remplir exactement le container 224×160 -->
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                         alt="" loading="lazy">
                    <!-- Partie haute : marqueurs Muna séparés (taille et positions d'origine) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 10%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Muna Hero marker" loading="lazy">
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; right: 10%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Muna Companion marker" loading="lazy">
                    <!-- Partie basse : marqueurs Axiom côte à côte à gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: 7%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Axiom Hero marker" loading="lazy">
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: calc(7% + 47px);"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Axiom Companion marker" loading="lazy">
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
                <figcaption>The Axiom Expedition markers (brown) are reunited at the end of the Day&nbsp;: <strong>Axiom wins the game!</strong> The Muna markers (green) are still apart.</figcaption>
              </figure>

              <p>
                Altered is a <strong>trading card game</strong> in which each player
                uses a deck led by a <strong>Hero or Heroine</strong> card.
                Several ready-to-play starter decks are available, but you can customize them
                or build an entirely new deck.
              </p>

              <h4>Game overview</h4>
              <p>You lead <strong>two Expeditions</strong> that explore the lands transformed by the Tumult&nbsp;:</p>
              <ul>
                <li>The <strong>Hero Expedition</strong>, led by your Hero/Heroine and represented by the Hero Expedition marker&nbsp;<img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="Hero Expedition marker" class="inline-marker-ic">.</li>
                <li>The <strong>Companion Expedition</strong>, represented by the Companion Expedition marker&nbsp;<img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png" alt="Companion Expedition marker" class="inline-marker-ic">.</li>
              </ul>
              <p>
                The Expeditions advance toward each other over the course of the game. Your goal is
                to <strong>reunite them before your opponent does</strong>.
              </p>

              <div style="clear:both"></div>

              <h4>The 6 factions</h4>
              <p>Each Hero/Heroine belongs to one of the game's six factions. Each faction has two Expedition markers&nbsp;: the left marker is the <strong>Hero marker</strong>, the right one the <strong>Companion marker</strong>.</p>
              <div class="factions-grid">
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png" alt="Axiom Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png" alt="Axiom Companion marker">
                  </div>
                  <div class="faction-name">Axiom</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_BR_Hero_Marker.png" alt="Bravos Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_BR_Companion_Marker.png" alt="Bravos Companion marker">
                  </div>
                  <div class="faction-name">Bravos</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_LY_Hero_Marker.png" alt="Lyra Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_LY_Companion_Marker.png" alt="Lyra Companion marker">
                  </div>
                  <div class="faction-name">Lyra</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png" alt="Muna Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png" alt="Muna Companion marker">
                  </div>
                  <div class="faction-name">Muna</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_OR_Hero_Marker.png" alt="Ordis Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_OR_Companion_Marker.png" alt="Ordis Companion marker">
                  </div>
                  <div class="faction-name">Ordis</div>
                </div>
                <div class="faction-cell">
                  <div class="faction-pair">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_YZ_Hero_Marker.png" alt="Yzmir Hero marker">
                    <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_YZ_Companion_Marker.png" alt="Yzmir Companion marker">
                  </div>
                  <div class="faction-name">Yzmir</div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 2. MATÉRIEL ========== -->
          <section id="materiel">
            <h2 class="section-title"><span>2. Material</span></h2>

            <p>
              Here is everything included in an Altered starter box. Click each item
              with a thumbnail to see the full illustration.
            </p>

            <!-- ===== Groupe 1 : Pour chaque joueur ===== -->
            <div class="materiel-group">
              <h3 class="materiel-group-title">
                <i class="fa-solid fa-user"></i>
                For each player
              </h3>

              <!-- Tapis de jeu (accordéon) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">1 playmat <span class="badge-optional">optional</span></div>
                      <div class="item-desc">Recommended for beginners&nbsp;: it helps visualize the different play zones (Expedition, Hero, Reserve, Landmarks, Mana, Deck, Discard).</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail">
                    <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Altered playmat with its zones">
                    <div class="detail-caption">The playmat and all its zones.</div>
                  </div>
                </details>
              </div>

              <!-- Deck de 39 cartes (statique : pas d'illustration unique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <i class="fa-solid fa-layer-group" style="font-size:1.8rem; color: var(--primary-400);"></i>
                </div>
                <div class="item-text">
                  <div class="item-title">1 deck of 39 cards</div>
                  <div class="item-desc">The deck you'll use throughout the game.</div>
                </div>
              </div>

              <!-- Carte Héros (accordéon) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_01_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">1 Hero or Heroine card</div>
                      <div class="item-desc">Determines your faction and your play strategy.</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail">
                    <div class="hero-examples">
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_01_C.webp"
                             alt="Sierra & Oddball Hero card, Axiom faction"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Axiom</div>
                          Sierra &amp; Oddball
                        </div>
                      </div>
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/en/DUSTER/ALT_DUSTER_B_MU_85_C.webp"
                             alt="Turuun & Benih Hero card, Muna faction"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Muna</div>
                          Turuun &amp; Benih
                        </div>
                      </div>
                      <div class="hero-example">
                        <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_YZ_02_C.webp"
                             alt="Lindiwe & Maw Heroine card, Yzmir faction"
                             loading="lazy">
                        <div class="hero-label">
                          <div class="hero-faction">Yzmir</div>
                          Lindiwe &amp; Maw
                        </div>
                      </div>
                    </div>
                    <div class="detail-caption">Three examples of Hero / Heroine cards from different factions.</div>
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
                  <div class="item-title">2 Expedition markers</div>
                  <div class="item-desc">A Hero marker and a Companion marker, in your faction's colors.</div>
                </div>
              </div>
            </div>

            <!-- ===== Groupe 2 : Pour les 2 joueurs ===== -->
            <div class="materiel-group">
              <h3 class="materiel-group-title">
                <i class="fa-solid fa-user-group"></i>
                For both players
              </h3>

              <!-- Marqueur Premier Joueur (statique) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">1 First Player marker</div>
                  <div class="item-desc">Indicates who starts the turn. Switches sides each Morning.</div>
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
                      <div class="item-title">5 Adventure cards</div>
                      <div class="item-desc">2 starting regions (Hero and Companion) + 3 Tumult cards.</div>
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
                      <figcaption class="detail-caption">Hero and Companion starting regions (stacked).</figcaption>
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
                      <figcaption class="detail-caption">3 Tumult cards forming the path to travel.</figcaption>
                    </figure>
                    <figure class="adv-detail-fig">
                      <div class="tumulte-regions-wrap">
                        <div class="tumulte-rotated-card">
                          <img src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                               alt="Tumult card with its two regions" loading="lazy">
                          <div class="tumulte-region-box rgn-left">1</div>
                          <div class="tumulte-region-box rgn-right">2</div>
                        </div>
                      </div>
                      <figcaption class="detail-caption">Each Tumult card has two regions to cross.</figcaption>
                    </figure>
                  </div>
                </details>
              </div>

              <!-- Cartes jeton (accordéon avec éventail) -->
              <div class="materiel-item">
                <details>
                  <summary>
                    <div class="item-thumb">
                      <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="item-text">
                      <div class="item-title">Token cards</div>
                      <div class="item-desc">Brassbugs, soldiers, etc. — created by other cards during play.</div>
                    </div>
                    <i class="fa-solid fa-chevron-down item-chevron"></i>
                  </summary>
                  <div class="item-detail composition-wrap">
                    <div class="token-fan" role="img" aria-label="Three examples of token cards">
                      <img class="token-1"
                           src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp"
                           alt="" loading="lazy">
                      <img class="token-2"
                           src="<?= CDN_URL ?>/cards/en/ALIZE/ALT_ALIZE_B_YZ_47_C.webp"
                           alt="" loading="lazy">
                      <img class="token-3"
                           src="<?= CDN_URL ?>/cards/en/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp"
                           alt="" loading="lazy">
                    </div>
                    <div class="detail-caption">Examples of tokens from various sets.</div>
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
                  <div class="item-title">Card markers</div>
                  <div class="item-desc">Boost +1, Boost +2, Fleeting, Anchored and Asleep — placed on Characters according to effects.</div>
                </div>
              </div>

              <!-- Marqueurs Terrains (statique, pas d'illustration disponible) -->
              <div class="materiel-item static">
                <div class="item-visual" aria-hidden="true">
                  <img src="<?= BASE_URL ?>/assets/biome/F.webp"
                       alt="" loading="lazy">
                  <img src="<?= BASE_URL ?>/assets/biome/M.webp"
                       alt="" loading="lazy">
                  <img src="<?= BASE_URL ?>/assets/biome/O.webp"
                       alt="" loading="lazy">
                </div>
                <div class="item-text">
                  <div class="item-title">Terrain markers</div>
                  <div class="item-desc">Forest, Mountain and Water — to modify a region's terrains during play.</div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 3. MISE EN PLACE ========== -->
          <section id="mise-en-place">
            <h2 class="section-title"><span>3. Setup</span></h2>

            <div class="rule-block">
              <figure class="rule-figure">
                <div class="setup-composition" role="img"
                     aria-label="Full setup: Adventure cards aligned at the top, playmat with Hero and Deck, markers and tokens on the side">

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
                      <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Altered playmat">

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
                           src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_01_C.webp"
                           alt="Sierra & Oddball Hero card placed in the Hero zone"
                           loading="lazy">
                      <img class="placed-first-player"
                           src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png"
                           alt="First Player marker"
                           loading="lazy">
                      <img class="placed-card placed-deck"
                           src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Deck face-down in the Deck zone"
                           loading="lazy">
                    </div>
                  </div>

                  <!-- Panneau latéral droit : marqueurs éparpillés et piles de jetons -->
                  <aside class="setup-side" style="position: relative;">
				  <!-- Étape 8 : marqueurs et jetons à portée -->
				  <div class="step-marker" style="top: 0; left: 50%; transform: translateX(-50%);">8</div>

                    <div class="setup-markers-scatter" aria-label="Available markers">
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

                    <div class="setup-tokens-stacks" aria-label="Token cards" style="position: relative;">

                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp" alt="" loading="lazy">
                      </div>
                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/en/ALIZE/ALT_ALIZE_B_YZ_47_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/en/ALIZE/ALT_ALIZE_B_YZ_47_C.webp" alt="" loading="lazy">
                      </div>
                      <div class="token-stack">
                        <img src="<?= CDN_URL ?>/cards/en/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp" alt="" loading="lazy">
                        <img src="<?= CDN_URL ?>/cards/en/CYCLONE/ALT_CYCLONE_B_MU_83_C.webp" alt="" loading="lazy">
                      </div>
                    </div>
                  </aside>

                </div>
                <figcaption>Full setup&nbsp;: Adventure cards aligned at the top, playmat with Hero card and Deck in place, markers and tokens within reach.</figcaption>
              </figure>

              <ol>
                <li>Shuffle the <strong>three Tumult cards</strong> and lay them face-down in a line between the two opposing sides.</li>
                <li>Place the <strong>Hero starting region card</strong> at one end of the line and the <strong>Companion starting region card</strong> at the other end.</li>
                <li>Each player places their <strong>Hero Expedition marker</strong> and <strong>Companion Expedition marker</strong> on the corresponding starting regions.</li>
                <li>Set up the <strong>two playmats</strong> facing each other on either side of the Tumult.</li>
                <li>Each player places their <strong>Hero or Heroine card</strong> in the Hero zone of their playmat.</li>
                <li>Randomly determine who starts the game, and place the <strong>First Player marker</strong> on their Hero/Heroine card.</li>
                <li>Each player shuffles their deck and places it face-down in the Deck zone.</li>
                <li>Keep the remaining token cards and markers within reach.</li>
              </ol>
            </div>

            <div class="rule-block">
              <h4>Starting hand</h4>
              <p>
                <strong>Draw 6 cards</strong> from your deck, then choose <strong>3</strong>
                to place in your Mana zone, <strong>face-down and ready</strong>.
                The other three cards form your <strong>starting hand</strong>.
              </p>
            </div>
          </section>

          <!-- ========== 4. ORBES DE MANA ========== -->
          <section id="mana">
            <h2 class="section-title"><span>4. Mana Orbs</span></h2>
            <div class="rule-block">
              <figure class="rule-figure">
                <div class="mana-orbs-composition" role="img"
                     aria-label="Mana Orbs: ready on the left, exhausted (turned 90°) on the right">
                  <div class="mana-orb">
                    <div class="orb-wrap">
                      <img src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Ready Mana Orb" loading="lazy">
                    </div>
                    <div class="orb-label">Ready</div>
                  </div>
                  <div class="mana-orb epuisee">
                    <div class="orb-wrap">
                      <img src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                           alt="Exhausted Mana Orb" loading="lazy">
                    </div>
                    <div class="orb-label">Exhausted</div>
                  </div>
                </div>
              </figure>
              <ul>
                <li>Cards in the Mana zone are always <strong>face-down</strong> and are called <strong>Mana Orbs</strong>.</li>
                <li>Each Mana Orb gives <strong>1 Mana</strong> when it is exhausted.</li>
                <li>Ready all your Mana Orbs during the <strong>Morning phase</strong>.</li>
                <li>A face-down card in the Mana zone stays there <strong>until the end of the game</strong>.</li>
              </ul>
            </div>
          </section>

          <!-- ========== 5. LES ZONES DE JEU ========== -->
          <section id="zones">
            <h2 class="section-title"><span>5. Game zones</span></h2>

            <p>
              The playmat features several zones, each with a specific role during the game.
              Here is an overview&nbsp;: click the numbers on the playmat to jump to the matching description.
            </p>

            <figure class="rule-figure">
              <div class="playmat-annotated">
                <img src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Altered playmat with zones numbered 1 to 7">
                <a href="#zone-1" class="zone-pin" style="top: 11%; left: 50%;"
                   aria-label="Hero zone">1</a>
                <a href="#zone-2" class="zone-pin" style="top: 14%; left: 12%;"
                   aria-label="Hero Expedition zone">2</a>
                <a href="#zone-2" class="zone-pin" style="top: 14%; left: 88%;"
                   aria-label="Companion Expedition zone">2</a>
                <a href="#zone-3" class="zone-pin" style="top: 47%; left: 17%;"
                   aria-label="Reserve zone">3</a>
                <a href="#zone-4" class="zone-pin" style="top: 47%; left: 75%;"
                   aria-label="Landmarks zone">4</a>
                <a href="#zone-5" class="zone-pin" style="top: 78%; left: 17%;"
                   aria-label="Mana zone">5</a>
                <a href="#zone-6" class="zone-pin" style="top: 82%; left: 78%;"
                   aria-label="Deck zone">6</a>
                <a href="#zone-7" class="zone-pin" style="top: 82%; left: 92%;"
                   aria-label="Discard zone">7</a>
              </div>
              <figcaption>The 7 zones of the playmat, numbered in the order of the descriptions below.</figcaption>
            </figure>

            <div class="zone-list">

              <div class="zone-item" id="zone-1">
                <div class="zone-num">1</div>
                <div class="zone-content">
                  <div class="zone-name">Hero zone</div>
                  <div class="zone-desc">
                    <p>This is where you place your <strong>Hero or Heroine</strong> card at the start of the game. This card stays there for the whole game and can be used to activate its special ability.</p>
                    <p>At the start of the game, the <strong>First Player marker</strong> is placed on the starting player's Hero card.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-2">
                <div class="zone-num">2</div>
                <div class="zone-content">
                  <div class="zone-name">Expedition zones (×2)</div>
                  <div class="zone-desc">
                    <p>Two zones, one for the <strong>Hero Expedition</strong> and one for the <strong>Companion Expedition</strong>. When you play a Character, you choose which Expedition to place it in.</p>
                    <p>Characters in these zones contribute to the Expedition's statistics at Dusk to move the corresponding Expedition marker forward.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-3">
                <div class="zone-num">3</div>
                <div class="zone-content">
                  <div class="zone-name">Reserve</div>
                  <div class="zone-desc">
                    <p>A <strong>face-up</strong> zone that works like a <strong>second hand</strong>. Characters resting at Night arrive here, and Spells played are sent here after resolution.</p>
                    <p>A card in the Reserve can be replayed by paying its <strong>Reserve Cost</strong>, but then gains <strong>Fleeting</strong>. During the Night phase, the Reserve is cleaned up to keep only 2 cards.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-4">
                <div class="zone-num">4</div>
                <div class="zone-content">
                  <div class="zone-name">Landmarks</div>
                  <div class="zone-desc">
                    <p>The zone where <strong>Landmark Permanents</strong> are placed. Unlike Characters, Permanents stay in play from one Day to the next and keep producing their effects.</p>
                    <p>During the Night phase, the Landmarks zone is also cleaned up to keep only 2 Permanents.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-5">
                <div class="zone-num">5</div>
                <div class="zone-content">
                  <div class="zone-name">Mana</div>
                  <div class="zone-desc">
                    <p>The zone where cards used as <strong>Mana Orbs</strong> are placed. A card put into Mana stays <strong>face-down until the end of the game</strong>.</p>
                    <p>Each Mana Orb provides 1 Mana when it is exhausted. All your Orbs are readied during the Morning phase.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-6">
                <div class="zone-num">6</div>
                <div class="zone-content">
                  <div class="zone-name">Deck</div>
                  <div class="zone-desc">
                    <p>Your draw pile, face-down. You draw your cards from it at the start of each Day.</p>
                    <p>If your Deck is empty and you must draw, shuffle your Discard&nbsp;: it becomes your new Deck.</p>
                  </div>
                </div>
              </div>

              <div class="zone-item" id="zone-7">
                <div class="zone-num">7</div>
                <div class="zone-content">
                  <div class="zone-name">Discard</div>
                  <div class="zone-desc">
                    <p>Cards set aside during play&nbsp;: Characters discarded from the Reserve or the Expeditions, resolved Fleeting Spells, excess cards from the Reserve cleaned up at Night, etc.</p>
                    <p>The Discard is a <strong>face-up</strong> zone&nbsp;: you can look through it at any time.</p>
                  </div>
                </div>
              </div>

            </div>
          </section>

          <!-- ========== 6. DÉTAIL D’UNE CARTE ========== -->
          <section id="carte">
            <h2 class="section-title"><span>6. Parts of a card</span></h2>

            <div class="rule-block">
              <figure class="rule-figure float-right">
                <div class="card-anatomy">
                  <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_YZ_14_C.webp"
                       alt="Anatomy of a Character card: Flamel, with zones A to I annotated"
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
                <figcaption>Anatomy of a Character card&nbsp;: zones A to I.</figcaption>
              </figure>

              <p>There are 4 types of cards&nbsp;: <strong>Heroes / Heroines</strong>, <strong>Characters</strong>, <strong>Spells</strong> and <strong>Permanents</strong>.</p>

              <h4>On all cards</h4>
              <ul>
                <li><strong>A — Name</strong> of the card</li>
                <li><strong>B — Type</strong> and sub-type(s)</li>
                <li><strong>C — Faction</strong>: there are 6 different factions</li>
                <li><strong>D — Hand Cost</strong>: the Mana cost when the card is played from your hand</li>
                <li><strong>E — Reserve Cost</strong>: the Mana cost when it is played from the Reserve</li>
                <li><strong>F — Abilities</strong>: the card's special rules</li>
                <li><strong>G — Support ability</strong>: an ability usable from the Reserve, present on some cards</li>
              </ul>

              <h4>On Character cards only</h4>
              <p>
				<strong>H —</strong> Characters have <strong>statistics</strong> corresponding to the three terrains&nbsp;:&nbsp;
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="">Forest</span>
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="">Mountain</span>
                <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="">Water</span>
              </p>

              <div style="clear:both"></div>

              <h4>I — Abilities by origin</h4>
              <p>Cards have various effects depending on where they are played from&nbsp;:</p>

              <div class="marker-grid">
                <div class="marker-item">
                  <div class="ic-circle ic-bg-anywhere"><i class="fak fa-altered-j"></i></div>
                  <div class="m-text">
                    <div class="m-desc"> This effect activates <strong>regardless of where</strong> the card is played from.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-hand"><i class="fak fa-altered-h"></i></div>
                  <div class="m-text">
                    <div class="m-desc"> This effect activates when it is played <strong>from your hand</strong>.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-reserve"><i class="fak fa-altered-r"></i></div>
                  <div class="m-text">
                    <div class="m-desc">This effect activates when it is played <strong>from your Reserve</strong>.</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 7. TYPES DE CARTES ========== -->
          <section id="types-cartes">
            <h2 class="section-title"><span>7. Other card types</span></h2>

            <div class="row g-3">
              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Spells</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_YZ_21_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    When you play a Spell, resolve all its effects, then send it
                    <strong>immediately to your Reserve</strong>. If you play a Spell from your
                    Reserve, it gains <strong>Fleeting</strong>: discard it after resolution.
                  </p>
                  <div class="rule-callout mb-0">
                    Some Spells are <strong>automatically Fleeting</strong>: they are
                    discarded directly after their effects.
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Landmark Permanents</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/en/CYCLONE/ALT_CYCLONE_B_MU_82_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    When you play a Landmark Permanent, <strong>place it in your Landmark zone</strong>. It only returns to the
                    Reserve if a game effect says so.
                  </p>
                  <div class="rule-callout mb-0">
                    Not all starter decks contain Landmark Permanents.
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="rule-block h-100">
                  <h3>Expedition Permanents</h3>
                  <div class="text-center mb-2">
                    <img src="<?= CDN_URL ?>/cards/en/ALIZE/ALT_ALIZE_B_BR_45_C.webp" alt="" loading="lazy" style="width: 160px; border-radius: 4px; box-shadow: 0 2px 6px rgba(0,0,0,.25);">
                  </div>
                  <p>
                    When you play an Expedition Permanent, <strong>place it in one of your Expeditions</strong>.
					<strong>At Rest</strong>, unlike a Character, <strong>an Expedition Permanent only
					goes to the Reserve if you advanced on that Expedition.</strong>
                  </p>
                  <div class="rule-callout mb-0">
                    Not all starter decks contain Expedition Permanents.
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 6. UN JOUR D'EXPLORATION ========== -->
          <section id="jour">
            <h2 class="section-title"><span>8. A day of exploration</span></h2>

            <div class="rule-block">
              <p>
                A game of Altered is played over several rounds called <strong>Days</strong>.
                Each Day is made up of <strong>five phases</strong>&nbsp;:
              </p>

              <div class="phases-grid">
                <a class="phase-card" href="#phase-matin">
                  <div class="phase-num">Phase 1</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Morning</div>
                  <div class="phase-desc">First player, ready, draw, place a card into Mana.</div>
                </a>
                <a class="phase-card" href="#phase-midi">
                  <div class="phase-num">Phase 2</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Noon</div>
                  <div class="phase-desc">Apply “At Noon” effects.</div>
                </a>
                <a class="phase-card" href="#phase-apres-midi">
                  <div class="phase-num">Phase 3</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Afternoon</div>
                  <div class="phase-desc">Take turns, play a card or pass.</div>
                </a>
                <a class="phase-card" href="#phase-crepuscule">
                  <div class="phase-num">Phase 4</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Dusk</div>
                  <div class="phase-desc">Compare statistics, advance the Expeditions.</div>
                </a>
                <a class="phase-card" href="#phase-nuit">
                  <div class="phase-num">Phase 5</div>
                  <div class="phase-icon"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" loading="lazy"></div>
                  <div class="phase-name">Night</div>
                  <div class="phase-desc">Rest, cleanup, check victory.</div>
                </a>
              </div>
            </div>

            <!-- PHASE 1 -->
            <div class="rule-block">
              <h3 id="phase-matin"><img src="<?= CDN_URL ?>/bga/icons/dawn.png" alt="" class="phase-title-icon" loading="lazy"> Phase 1 — Morning</h3>
              <p>
                If it is the <strong>first Day</strong> of the game, go straight to the Noon
                phase. Otherwise, follow these steps&nbsp;:
              </p>
              <ol>
                <li>Pass the <strong>First Player</strong> marker to the other side.</li>
                <li>Ready your <strong>Mana Orbs</strong> and your exhausted cards.</li>
                <li><strong>Draw two cards</strong> from your deck.</li>
                <li>Starting with the side holding the First Player marker, each player chooses whether to place <strong>a card from their hand</strong> into their Mana zone.</li>
              </ol>
            </div>

            <!-- PHASE 2 -->
            <div class="rule-block">
              <h3 id="phase-midi"><img src="<?= CDN_URL ?>/bga/icons/noon.png" alt="" class="phase-title-icon" loading="lazy"> Phase 2 — Noon</h3>
              <p>Activate all cards in play with an <strong>“At Noon”</strong> effect.</p>
              <div class="rule-callout">
                Not all starter decks contain cards with an “At Noon” effect.
              </div>
            </div>

            <!-- PHASE 3 -->
            <div class="rule-block">
              <h3 id="phase-apres-midi"><img src="<?= CDN_URL ?>/bga/icons/afternoon.png" alt="" class="phase-title-icon" loading="lazy"> Phase 3 — Afternoon</h3>
              <p>
                Starting with the holder of the First Player marker, both sides play
                <strong>one after another</strong>, <strong>one card at a time</strong>.
              </p>
              <div class="rule-callout">
				<div>In Altered, <strong>1 turn = 1 card</strong></div>
				<div>As soon as a card has been played, the other player begins their turn.</div>
              </div>

              <h4>Turn structure</h4>
              <div class="flow">
                <div class="flow-step">
                  <div class="step-num">STEP 1</div>
                  <div class="step-title">Quick actions</div>
                  <div class="step-text">Take as many <strong>quick actions</strong> as you want.</div>
                </div>
                <div class="flow-step">
                  <div class="step-num">STEP 2</div>
                  <div class="step-title">Play or pass</div>
                  <div class="step-text">Then, <strong>play a card</strong> OR <strong>pass</strong>.</div>
                </div>
              </div>

              <h4>Quick actions</h4>
              <p>There are two kinds of quick actions&nbsp;:</p>
              <ul>
                <li><strong>Exhaust ability</strong>: present on some Permanent or Hero cards. <strong><i class="fak fa-altered-t"></i> Exhaust</strong> the card to activate its effect.</li>
                <li><strong>Support ability</strong>: usable if the card is in the Reserve. To activate it, <strong><i class="fak fa-altered-d"></i> discard</strong> the card from your Reserve.</li>
              </ul>
              <div class="rule-callout tip">
                <strong>Reminder.</strong> A quick action does not count as playing a card and does not
                end your turn.
              </div>

              <h4>Playing a card</h4>
              <p>
                To play a card, you must <strong><i class="fak fa-altered-t"></i> exhaust the number of Mana Orbs</strong>
                matching its cost.
              </p>
              <ul>
                <li><strong>Playing a Character</strong>: decide which Expedition to place it in (Hero or Companion).</li>

				  <figure class="rule-figure" style="max-width: 380px; margin: 0.5rem auto 1.25rem;">
					<div class="play-character-illus" role="img"
						 aria-label="Playing a Character: the card can join the Hero Expedition or the Companion Expedition.">
					  <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="" loading="lazy">
					  <img class="pc-card pc-hero"
						   src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_01_C.webp"
						   alt="Sierra & Oddball Hero card" loading="lazy">
					  <img class="pc-card pc-played"
						   src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_08_C.webp"
						   alt="Character card being played" loading="lazy">
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
                <li><strong>Playing a Spell</strong>: resolve all its effects, then send it immediately to your Reserve.</li>
                <li><strong>Playing a Landmark Permanent</strong>: place the card in your Landmarks zone.</li>
                <li><strong>Playing an Expedition Permanent</strong>: decide which Expedition to place it in (Hero or Companion).</li>
                <li><strong>Playing a card from the Reserve</strong>: see <a href="#reserve">The Reserve</a>.</li>
              </ul>

			  <p>
				Don't forget to resolve any <i class="fak fa-altered-j"></i>, <i class="fak fa-altered-h"></i> or <i class="fak fa-altered-r"></i>
				effects on the Characters and Permanents.
			  </p>

              <h4>Pass</h4>
              <p>
                If you cannot or do not wish to play a card, you may <strong>pass</strong>.
                You then can't take any more turns until the next Afternoon phase.
                When you pass, your opponent can keep playing. Once they have
                also passed, the Dusk phase begins.
              </p>
            </div>

            <!-- PHASE 4 -->
            <div class="rule-block">
              <h3 id="phase-crepuscule"><img src="<?= CDN_URL ?>/bga/icons/dusk.png" alt="" class="phase-title-icon" loading="lazy"> Phase 4 — Dusk</h3>
              <p>
                During Dusk, both sides <strong>compare the statistics</strong> of the
                Characters in play to determine which Expedition markers can move forward.
              </p>
              <p>Starting with one Expedition (Hero or Companion), carry out the following steps&nbsp;:</p>

              <div class="flow">
                <div class="flow-step">
                  <div class="step-badge">A</div>
                  <div class="step-title">Check the terrains</div>
                  <div class="step-text">Identify the terrain(s)
                    (<img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="Forest" class="biome-ic">
                    <img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="Mountain" class="biome-ic">
                    <img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="Water" class="biome-ic">)
                    of the region where your marker is located.</div>
                </div>
                <div class="flow-step">
                  <div class="step-badge">B</div>
                  <div class="step-title">Add up</div>
                  <div class="step-text">For each terrain, add up the matching statistics of the Characters in that Expedition.</div>
                </div>
                <div class="flow-step">
                  <div class="step-badge">C</div>
                  <div class="step-title">Compare &amp; advance</div>
                  <div class="step-text">If at least one of your totals is <strong>strictly higher</strong> than your opponent's, your Expedition moves forward one region.</div>
                </div>
              </div>

              <p>Then proceed the same way for the remaining Expedition. Your opponent does the same for their Expeditions.</p>

              <div class="rule-callout">
                <ul class="mb-0">
                  <li>Your total must be <strong>higher than 0</strong> in order to move forward.</li>
                  <li><strong>Asleep</strong> Characters <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="Asleep marker" style="width: 1.6em; height: 1.6em; vertical-align: -0.25em;" loading="lazy"> are not counted in the statistics.</li>
                  <li>Each Expedition can only move forward <strong>once</strong> per Dusk phase.</li>
                  <li>When an Expedition moves onto a face-down Tumult card, <strong>flip it face-up</strong>.</li>
                  <li>You always compare your <strong>Hero Expedition with your opponent's Hero Expedition</strong>, even if the two markers are not in the same region. The same goes for Companions.</li>
                </ul>
              </div>

              <h4>Example — Mike vs Ella</h4>
              <figure class="rule-figure">
                <div class="dusk-composition" role="img"
                     aria-label="Dusk example: Mike plays a Muna Character, Ella two Axiom Characters">

                  <!-- Étiquettes joueurs -->
                  <span class="dusk-player-label pierre">Mike</span>
                  <span class="dusk-player-label noemie">Ella</span>

                  <!-- Rangée 1 : Personnage de Pierre (Muna) + explication à droite -->
                  <div class="dusk-row-with-text">
                    <div class="dusk-character-row">
                      <div class="dusk-character-wrap">
                        <img class="dusk-character"
                             src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_MU_10_C.webp"
                             alt="Muna Character played by Mike"
                             loading="lazy">
                        <!-- <div class="dusk-highlight pierre"></div> -->
                      </div>
                    </div>
                    <aside class="dusk-side-text">
                      <p>
                        <span class="step-badge">A</span>
                        <strong>Mike's</strong> Hero Expedition marker is on a card with
                        3 terrains&nbsp;:
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="">Forest</span>
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="">Mountain</span>
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="">Water</span>.
                        To move forward, Mike's total must beat Ella's in at least one of these terrains.
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
                           alt="Muna Hero marker" loading="lazy">
                    </div>
                    <!-- Carte droite : ADV_CARD_3 avec marqueur Axiom Héros au premier quart -->
                    <div class="adv-slot">
                      <img class="adv-card-dusk"
                           src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                           alt="" loading="lazy">
                      <img class="dusk-marker first-quarter"
                           src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                           alt="Axiom Hero marker" loading="lazy">
                    </div>
                  </div>

                  <!-- Rangée 3 : 2 Personnages de Noémie superposés (Axiom) + explication à droite -->
                  <div class="dusk-row-with-text">
                    <div class="dusk-bottom-row">
                      <img class="dusk-character back"
                           src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_04_C.webp"
                           alt="Axiom Character played by Ella (background)"
                           loading="lazy">
                      <img class="dusk-character front"
                           src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_08_C.webp"
                           alt="Axiom Character played by Ella (foreground)"
                           loading="lazy">
                      <!-- <div class="dusk-highlight noemie"></div> -->
                    </div>
                    <aside class="dusk-side-text">
                      <p>
                        <span class="step-badge">A</span>
                        On Ella's side, her Hero Expedition marker is in a
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="">Forest</span> and
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="">Water</span> region.
                        To move forward, Ella's total must beat Mike's in at least one of these terrains.
                        Her
                        <span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="">Mountain</span>
                        stats only serve to block Mike.
                      </p>
                    </aside>
                  </div>

                </div>
                <figcaption>Full example&nbsp;: terrain-by-terrain comparison, steps A, B and C.</figcaption>
              </figure>

			  <p>
				Ella therefore cannot advance via
				<span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="">Mountain</span>
				but can prevent Mike from advancing there.
			  </p>

              <p>
                <span class="step-badge">B</span>
                Next, add up each Expedition's statistics for each of these terrains&nbsp;:
              </p>

              <div class="table-responsive">
                <table class="example-table">
                  <thead>
                    <tr>
                      <th>Terrain</th>
                      <th class="center">Mike</th>
                      <th class="center">Ella</th>
                      <th>Result</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="">Forest</span></td>
                      <td class="center"><strong>3</strong></td>
                      <td class="center">1+1 = 2</td>
                      <td><span class="text-success">✓</span> Mike wins in Forest</td>
                    </tr>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="">Mountain</span></td>
                      <td class="center">3</td>
                      <td class="center">3+1 = <strong>4</strong></td>
                      <td>✕ Ella blocks Mike</td>
                    </tr>
                    <tr>
                      <td><span class="terrain-badge"><img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="">Water</span></td>
                      <td class="center">3</td>
                      <td class="center">3+1 = <strong>4</strong></td>
                      <td><span class="text-success">✓</span> Ella wins in Water</td>
                    </tr>
                  </tbody>
                </table>
              </div>

              <p>
                <span class="step-badge">C</span>
                Since his <strong>Forest</strong> total beats Ella's, Mike's
                marker advances. On her side, since her <strong>Water</strong> total beats
                Mike's, Ella's marker also advances. Both players progress on their
				Hero Expedition this Day.
              </p>
            </div>

            <!-- PHASE 5 -->
            <div class="rule-block">
              <h3 id="phase-nuit"><img src="<?= CDN_URL ?>/bga/icons/night.png" alt="" class="phase-title-icon" loading="lazy"> Phase 5 — Night</h3>

              <figure class="rule-figure">
                <div class="cleanup-illus" role="img"
                     aria-label="Night phase: during Rest, Characters leave the Expeditions for the Reserve (or the discard if Fleeting); during Cleanup, the excess from the Reserve and Landmarks is discarded to keep only 2 cards per zone.">

                  <div class="cleanup-playmat">
                    <img class="playmat-bg" src="<?= BASE_URL ?>/plugins/rules/assets/playmat.jpg" alt="Altered playmat">

                    <!-- Expédition gauche : 2 Personnages épuisés -->
                    <img class="cleanup-card cl-exp-l1 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_04_C.webp"
                         alt="Character on the left Expedition" loading="lazy">
                    <img class="cleanup-card cl-exp-l2 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_08_C.webp"
                         alt="Character on the left Expedition" loading="lazy">

                    <!-- Carte Héros : Sierra & Oddball -->
                    <img class="cleanup-card cl-hero"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_01_C.webp"
                         alt="Sierra & Oddball Hero card placed in the Hero zone" loading="lazy">

                    <!-- Deck face cachée -->
                    <img class="cleanup-card cl-deck"
                         src="<?= CDN_URL ?>/marketing/cardbacks/ALT_OFFICIAL_CARDBACK.png"
                         alt="Deck face-down in the Deck zone" loading="lazy">

                    <!-- Expédition droite : Personnage avec marqueur Fugace (gauche) + Scarabot (droite) -->
                    <img class="cleanup-card cl-exp-r cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_16_R1.webp"
                         alt="Character that became Fleeting on the right Expedition" loading="lazy">
                    <img class="cleanup-card cl-exp-r2 cleanup-grayed"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp"
                         alt="Fleeting Brassbug on the right Expedition" loading="lazy">
                    <img class="cleanup-marker cl-fugace"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png"
                         alt="Fleeting marker" loading="lazy">

                    <!-- Réserve : 3 cartes (excédent) -->
                    <img class="cleanup-card cl-res-1"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_13_C.webp"
                         alt="Reserve card" loading="lazy">
                    <img class="cleanup-card cl-res-2"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_04_C.webp"
                         alt="Reserve card" loading="lazy">
                    <img class="cleanup-card cl-res-3"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_08_C.webp"
                         alt="Reserve card (excess)" loading="lazy">

                    <!-- Repères : 3 cartes (excédent) -->
                    <img class="cleanup-card cl-lm-1"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_24_C.webp"
                         alt="Landmark (excess)" loading="lazy">
                    <img class="cleanup-card cl-lm-2"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_25_C.webp"
                         alt="Landmark" loading="lazy">
                    <img class="cleanup-card cl-lm-3"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_30_R1.webp"
                         alt="Landmark" loading="lazy">
                  </div>

                  <!-- Carte Fugace défaussée, hors du tapis -->
                  <div class="cleanup-outside">
                    <img class="cleanup-card cl-outside-card"
                         src="<?= CDN_URL ?>/cards/en/CORE/ALT_CORE_B_AX_31_C.webp"
                         alt="Fleeting Character discarded off the playmat" loading="lazy">
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
                  <div class="cleanup-label cleanup-label--repos">Rest</div>
                  <div class="cleanup-label cleanup-label--nettoyage">Cleanup</div>

                </div>
                <figcaption>
                  At <strong>Rest</strong>, Characters go to the Reserve (or are discarded if Fleeting); token cards are set aside.<br/>
				  At <strong>Cleanup</strong>, discard the excess from the Reserve and Landmarks to keep only 2 per zone.
                </figcaption>
              </figure>

              <h4>Rest</h4>
              <p>
                Send <strong>all the Characters</strong> from your Expeditions to your Reserve.
              </p>
              <ul>
				<li>If they are <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Fleeting</strong>, discard them instead.</li>
                <li><img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Boost</strong> markers are removed from the card before it returns to the Reserve.</li>
                <li>Cards carrying an <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Asleep</strong> or <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="" class="inline-marker-ic" loading="lazy"> <strong>Anchored</strong> marker do not go to the Reserve&nbsp;: they lose their Asleep/Anchored marker instead and stay in the Expedition.</li>
              </ul>
			  <p>
				Send to the Reserve <strong>all the Expedition Permanents</strong> placed in an <strong>Expedition that advanced</strong>.
			  </p>
			  <p>
				Set aside — not in the Reserve — the <strong>token cards</strong> from your Expeditions.
			  </p>

              <h4>Cleanup</h4>
              <ul>
                <li>If you have 3 or more cards in your <strong>Reserve</strong>, discard the excess to keep only <strong>2 cards</strong> of your choice.</li>
                <li>Likewise, sacrifice cards from your <strong>Landmarks</strong> to keep only 2.</li>
              </ul>

              <div class="rule-callout tip">
                During the other phases of the Day, there is no limit to the number of cards
                in the Reserve and the Landmarks zone.
              </div>

              <h4>Check victory</h4>
              <p>See <a href="#fin-partie">Ending the game</a>.</p>

              <div class="rule-callout text-center">
                This Day is now over. <strong>Start a new Day</strong>, beginning with the
                Morning phase.
              </div>
            </div>
          </section>

          <!-- ========== 6. LA RÉSERVE ========== -->
          <section id="reserve">
            <h2 class="section-title"><span>9. The Reserve</span></h2>

            <div class="rule-block">
              <p>
                The Reserve is a <strong>face-up zone</strong> that works like a
                <strong>second hand</strong>.
              </p>

              <h4>Playing a card from the Reserve</h4>
              <p>
                A card in your Reserve can be played as if it were in your hand,
                with two differences&nbsp;:
              </p>
              <ul>
                <li>You pay its <strong>Reserve Cost</strong> instead of its Hand Cost.</li>
                <li>A card played from the Reserve gains <strong>Fleeting</strong> (unless it is a Landmark Permanent).</li>
              </ul>

              <h4>Fleeting</h4>
              <p>
                If a Fleeting card would normally be sent to the Reserve, <strong>discard it
                instead</strong>. For Characters: place a Fleeting marker on the
                Character as a reminder.
              </p>

              <div class="rule-callout warn">
                <strong>Important — targeting.</strong> Cards in the Reserve are not
                “controlled”&nbsp;: their abilities don't apply and they can't be
                targeted by an ability that doesn't <strong>explicitly</strong> mention the Reserve.
                <br><br>
                A card reading “Discard target Character” <em>cannot</em>
                target a Character in the Reserve, but a card reading “Discard a
                target card in a Reserve” can.
              </div>
            </div>
          </section>

          <!-- ========== 10. FIN DE LA PARTIE ========== -->
          <section id="fin-partie">
            <h2 class="section-title"><span>10. Ending the game</span></h2>

            <div class="rule-block">
              <p class="fs-5">
                <i class="fa-solid fa-trophy text-warning"></i>
                The first player to <strong>reunite their Hero Expedition and Companion
                Expedition</strong> wins the game at the end of the Day.
              </p>

              <h4>In case of a tie</h4>
              <figure class="rule-figure float-right small">
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Tumult Adventure card: the Muna Hero marker advanced further than necessary, the other markers are still apart">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_3.png"
                         alt="" loading="lazy">
                    <!-- Muna Héros : pleine opacité (marqueur gagnant) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 10%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Muna Hero marker" loading="lazy">
                    <!-- Muna Compagnon : haut droite, estompé (position de départ) -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; right: 10%; left: auto; opacity: 0.5;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Muna Companion marker (start)" loading="lazy">
                    <!-- Muna Compagnon : arrivée, pleine opacité — left:20% → centre x=72 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 31%; left: 20%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Muna Companion marker (arrival)" loading="lazy">
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
                         alt="Axiom Hero marker (start)" loading="lazy">
                    <!-- Axiom Héros : arrivée — right:20% → centre x=152 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; right: 20%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Axiom Hero marker (arrival)" loading="lazy">
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
                         alt="Axiom Companion marker (start)" loading="lazy">
                    <!-- Axiom Compagnon : arrivée à droite du Héros — left:20% → centre x=72 -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; bottom: -5%; top: auto; left: 20%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Axiom Companion marker (arrival)" loading="lazy">
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
                <figcaption>Ella advances further than necessary and wins!</figcaption>
              </figure>
              <p>
                If both opponents' markers met up on the <strong>same Day</strong>,
                first check whether one of them <strong>advanced further than necessary</strong>.
                If that's the case for one but not the other, the one who did wins the game.
              </p>

              <div class="rule-callout tip">
                <strong>Example.</strong> Ella's and Mike's Expeditions are both about
                to meet up. During Dusk, both of Ella's Expeditions advance
                and cross, while only Mike's Companion Expedition advances. Ella has
                advanced further than necessary and therefore wins the game.
              </div>

              <div style="clear:both"></div>

              <h4>The Arena — ultimate tiebreaker</h4>
              <figure class="rule-figure float-right small">
                <div class="dusk-adventures"
                     style="width: 224px; height: 160px; margin: 0 auto 50px;"
                     role="img"
                     aria-label="Arena card with the four Muna and Axiom Expedition markers">
                  <div class="adv-slot" style="width: 224px; height: 160px;">
                    <img class="adv-card-dusk" style="width: 160px; transform: rotate(90deg);"
                         src="<?= CDN_URL ?>/marketing/adventure_cards/btg/ADV_CARD_5-B.png"
                         alt="" loading="lazy">
                    <!-- Muna Héros : haut gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 33%; left: 16%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Hero_Marker.png"
                         alt="Muna Hero marker" loading="lazy">
                    <!-- Axiom Héros : haut droite -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: auto; bottom: -5%; right: auto; left: 16%;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Hero_Marker.png"
                         alt="Axiom Hero marker" loading="lazy">
                    <!-- Muna Compagnon : bas gauche -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: 33%; bottom: auto; right: 15%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_MU_Companion_Marker.png"
                         alt="Muna Companion marker" loading="lazy">
                    <!-- Axiom Compagnon : bas droite -->
                    <img class="dusk-marker"
                         style="width: 55px; height: auto; top: auto; bottom: -5%; right: 15%; left: auto;"
                         src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_AX_Companion_Marker.png"
                         alt="Axiom Companion marker" loading="lazy">
                  </div>
                </div>
                <figcaption>The Arena, on the back of the Companion starting region card.</figcaption>
              </figure>
              <p>
                Otherwise, play an <strong>extra Day in the Arena</strong> to break
                the tie. The Arena is on the back of the Companion starting region card:
                place it in the center of the table, put both sides' Expedition markers on it,
                and remove the other Adventure cards from the game.
              </p>
              <p>
                Then play a Day normally. At Dusk, for each Arena terrain
                (<img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="Forest" class="biome-ic">
                <img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="Mountain" class="biome-ic">
                <img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="Water" class="biome-ic">),
                add up the statistics of the Characters in <strong>both your Expeditions</strong>.
                Compare the three totals with your opponent's: whoever wins
                in the most terrains wins the game.
              </p>
              <p class="mb-0">If both sides are tied again, <strong>start a new Day</strong> in the Arena.</p>
              <div style="clear:both"></div>
            </div>
          </section>

          <!-- ========== 9. RÈGLES SUPPLÉMENTAIRES ========== -->
          <section id="regles-sup">
            <h2 class="section-title"><span>11. Additional rules</span></h2>

            <div class="row g-3">
              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Card abilities</h3>
                  <p class="mb-0">
                    If a card's abilities <strong>contradict</strong> the general rules,
                    follow what is written on the card.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Targeting</h3>
                  <p>
                    Card abilities target <strong>cards in play</strong> by default:
                    Characters in an Expedition or Permanents in the Landmarks zone.
                  </p>
                  <p class="mb-0">
                    Cards in the Reserve are <strong>not controlled</strong> and can only be
                    targeted by an ability that <strong>explicitly mentions the Reserve</strong>.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Out of cards in your deck?</h3>
                  <p class="mb-0">
                    <strong>At Noon only</strong>, if your deck is empty, <strong>shuffle your discard</strong>,
					which then becomes your new deck. Then draw the required number of cards.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Permanent from the Reserve</h3>
                  <p class="mb-0">
                    If you play a <strong>Landmark Permanent</strong> from the Reserve, pay its
                    Reserve Cost. It <strong>does not gain Fleeting</strong>.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>“At Noon”, “At Dusk”, “At Night”</h3>
                  <p class="mb-0">
                    These abilities trigger at the <strong>beginning</strong> of their respective phase.
                    The side holding the First Player marker resolves theirs first,
                    in the order of their choice.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>“I” in abilities</h3>
                  <p class="mb-0">
                    Cards use <strong>“I”</strong> to refer to themselves.
                    For example, “I gain 2 boosts” means “This card gains 2 boosts”.
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Support ability</h3>
                  <p class="mb-0">
                    A Support ability triggers <strong>only when you discard the
                    card as a quick action</strong>, not if the card is discarded for another reason
                    (for example if you have too many cards in your Reserve during the Night).
                  </p>
                </div>
              </div>

              <div class="col-md-6">
                <div class="rule-block h-100">
                  <h3>Token cards</h3>
                  <p>
                    Token cards don't start in your deck but are <strong>created by other cards</strong>.
                  </p>
                  <p class="mb-0">
                    When a token leaves its associated zone, it is <strong>removed from the game</strong>, even
                    if a card tells you to do something else with it!
                  </p>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 10. MARQUEURS & ICÔNES ========== -->
          <section id="marqueurs">
            <h2 class="section-title"><span>12. Markers &amp; icons</span></h2>

            <div class="rule-block">
              <h3>Game markers</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_First_Player_A_Marker.png" alt="First Player marker">
                  <div class="m-text">
                    <div class="m-label">First Player</div>
                    <div class="m-desc">Indicates who starts the turn. Switches each Morning.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost1_Marker.png" alt="Boost +1 marker">
                  <div class="m-text">
                    <div class="m-label">Boost +1</div>
                    <div class="m-desc">Increases all <strong>three statistics</strong> by 1.<br/>Removed when the Character leaves the Expeditions.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Boost2_Marker.png" alt="Boost +2 marker">
                  <div class="m-text">
                    <div class="m-label">Boost +2</div>
                    <div class="m-desc">Increases all three statistics by 2.<br/>Removed when the Character leaves the Expeditions.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Fleeting_Marker.png" alt="Fleeting marker">
                  <div class="m-text">
                    <div class="m-label">Fleeting</div>
                    <div class="m-desc">If a Fleeting card would be sent to the Reserve, that card is discarded instead. This applies at Rest or due to an in-game effect.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Anchored_Marker.png" alt="Anchored marker">
                  <div class="m-text">
                    <div class="m-label">Anchored</div>
                    <div class="m-desc">Marker placed on a Character. <strong>At Rest</strong>, an Anchored Character <strong>does not go to the Reserve</strong> but loses its Anchored marker instead.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= CDN_URL ?>/marketing/game_assets/markers/ALT_Asleep_Marker.png" alt="Asleep marker">
                  <div class="m-text">
                    <div class="m-label">Asleep</div>
                    <div class="m-desc">Marker placed on a Character. An Asleep Character is <strong>not counted in the Dusk advance phase</strong>. <strong>At Rest</strong>, an Asleep Character <strong>does not go to the Reserve</strong> but loses its Asleep marker instead.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rule-block">
              <h3>Card icons</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <div class="ic-circle ic-bg-anywhere"><i class="fak fa-altered-j"></i></div>
                  <div class="m-text">
                    <div class="m-label">“From anywhere” effect</div>
                    <div class="m-desc">Ability active wherever the card is played from.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-hand"><i class="fak fa-altered-h"></i></div>
                  <div class="m-text">
                    <div class="m-label">“From hand” effect</div>
                    <div class="m-desc">Ability active only when played from the hand.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-reserve"><i class="fak fa-altered-r"></i></div>
                  <div class="m-text">
                    <div class="m-label">“From Reserve” effect</div>
                    <div class="m-desc">Ability active only when played from the Reserve.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-epuiser"><i class="fak fa-altered-t"></i></div>
                  <div class="m-text">
                    <div class="m-label">Exhaust</div>
                    <div class="m-desc">Turn the card to activate its effect.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-defausse"><i class="fak fa-altered-d"></i></div>
                  <div class="m-text">
                    <div class="m-label">Support</div>
                    <div class="m-desc">Discard the card to activate its Support effect.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <div class="ic-circle ic-bg-permanent"><i class="fak fa-altered-i"></i></div>
                  <div class="m-text">
                    <div class="m-label">Continuous Support</div>
                    <div class="m-desc">Marks a Support ability that applies continuously, without needing to discard the card.</div>
                  </div>
                </div>
              </div>
            </div>

            <div class="rule-block">
              <h3>Terrains</h3>
              <div class="marker-grid">
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/assets/biome/F.webp" alt="Forest">
                  <div class="m-text">
                    <div class="m-label">Forest</div>
                    <div class="m-desc">Forest statistic on Characters.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/assets/biome/M.webp" alt="Mountain">
                  <div class="m-text">
                    <div class="m-label">Mountain</div>
                    <div class="m-desc">Mountain statistic on Characters.</div>
                  </div>
                </div>
                <div class="marker-item">
                  <img src="<?= BASE_URL ?>/assets/biome/O.webp" alt="Water">
                  <div class="m-text">
                    <div class="m-label">Water</div>
                    <div class="m-desc">Water statistic on Characters.</div>
                  </div>
                </div>
              </div>
            </div>
          </section>

          <!-- ========== 13. KEYWORDS ========== -->
          <section id="mots-cles">
            <h2 class="section-title"><span>13. Keywords</span></h2>

            <div class="rule-block">
              <p>
                Glossary of the keywords found on cards from Sets&nbsp;1 to&nbsp;5.
                The French term printed on the cards is shown in parentheses.
              </p>
              <ul class="keywords-glossary">
                <li id="seasoned"><strong>Seasoned</strong> <span class="kw-fr">(Aguerri)</span> — A Seasoned Character keeps its boosts when sent to the Reserve from the Expedition zone.</li>
                <li id="augment"><strong>Augment</strong> <span class="kw-fr">(Amplifier)</span> — If the target card has at least one counter (Boost, etc.), it gains one more. Hero cards cannot be targeted.</li>
                <li id="anchored"><strong>Anchored</strong> <span class="kw-fr">(Ancré)</span> — During Rest, an Anchored Character is not sent to the Reserve; it loses Anchored instead.</li>
                <li id="support-ability"><strong>Support ability</strong> <span class="kw-fr">(Capacité de Soutien)</span> — Written at the bottom of some cards on a coloured background, a Support ability requires the card to be in the Reserve. It may need to be discarded (<i class="fak fa-altered-d"></i>) to trigger its effect, or apply continuously (<i class="fak fa-altered-i"></i>).</li>
                <li id="tough-x"><strong>Tough X</strong> <span class="kw-fr">(Coriace X)</span> — An opponent cannot choose a Tough X object as the target of an effect they control unless they pay X additional mana.</li>
                <li id="defender"><strong>Defender</strong> <span class="kw-fr">(Défenseur)</span> — An Expedition containing a Character with Defender cannot move forward during Dusk.</li>
                <li id="gift"><strong>Gift</strong> <span class="kw-fr">(Don)</span> — You make a Gift if, during your turn, an opponent draws a card, Resupplies or receives a token via an effect of a card you control.</li>
                <li id="ascend"><strong>Ascend</strong> <span class="kw-fr">(Élevé)</span> — Until Rest, an Ascended Expedition can move forward even with statistics equal to the opposing Expedition on the terrains of its region. It still cannot move forward with statistics of&nbsp;0.</li>
                <li id="in-contact"><strong>In Contact</strong> <span class="kw-fr">(En Contact)</span> — A Character is In Contact if one of the opponent's Expeditions is in this Character's region.</li>
                <li id="asleep"><strong>Asleep</strong> <span class="kw-fr">(Endormi)</span> — An Asleep Character's statistics are not counted during Dusk. During Rest, an Asleep Character is not sent to the Reserve; it loses Asleep instead.</li>
                <li id="exhaust"><strong>Exhaust</strong> <span class="kw-fr">(Épuiser)</span> — An exhausted (90°-turned) card in the Reserve cannot be played and has no Support abilities.</li>
                <li id="eternal"><strong>Eternal</strong> <span class="kw-fr">(Éternel)</span> — An Eternal Character is not sent to the Reserve during Rest.</li>
                <li id="rush"><strong>Rush</strong> <span class="kw-fr">(Foncer)</span> — Immediately play another card.</li>
                <li id="fleeting"><strong>Fleeting</strong> <span class="kw-fr">(Fugace)</span> — If a Fleeting card is sent to the Reserve, that card is discarded instead. This applies at Rest or due to an in-game effect. All cards played from the Reserve gain Fleeting, except Landmark Permanents.</li>
                <li id="gigantic"><strong>Gigantic</strong> <span class="kw-fr">(Gigantesque)</span> — A Gigantic Character is present in both your Expeditions.</li>
                <li id="cooldown"><strong>Cooldown</strong> <span class="kw-fr">(Rafraîchissement)</span> — If the card goes to the Reserve after its effect resolves, exhaust it.</li>
                <li id="resupply"><strong>Resupply</strong> <span class="kw-fr">(Ravitailler)</span> — Place the top card of your Deck in your Reserve.</li>
                <li id="exhausted-resupply"><strong>Exhausted Resupply</strong> <span class="kw-fr">(Ravitailler épuisé)</span> — Resupply, then exhaust the resupplied card.</li>
                <li id="scout-x"><strong>Scout X</strong> <span class="kw-fr">(Repérage X)</span> — This card can be played from your Hand for X mana with the additional effect <em><i class="fak fa-altered-h"></i> Send me to the Reserve</em>.</li>
                <li id="sabotage"><strong>Sabotage</strong> <span class="kw-fr">(Saboter)</span> — Discard a target card from a Reserve.</li>
                <li id="sacrifice"><strong>Sacrifice</strong> <span class="kw-fr">(Sacrifier)</span> — Discard a target card from one of your Expeditions or your Landmark zone.</li>
                <li id="defect"><strong>Defect</strong> <span class="kw-fr">(Trahir)</span> — A Character that Defects joins the Expedition facing it and changes controller (but not owner).</li>
              </ul>
            </div>
          </section>

          <!-- Retour en haut -->
          <div class="text-center mt-4">
            <a href="#" class="btn btn-primary-altered">
              <i class="fa-solid fa-arrow-up"></i> Back to top
            </a>
          </div>

    </div>
  </div>
</div>
