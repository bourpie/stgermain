<?php $page = 'accueil';?>
<?php include 'head.php';?>
    <header class="header-accueil">
     <?php include 'nav.php';?>
      <div class="container header-container-accueil">
        <h1 class="h1-container-accueil">À l'Érablière St-Germain, on sait recevoir!</h1>
        <p>L'érablière est située dans un milieu pittoresque sur un terrain de plus de 85 acres à l'est de Gatineau. C’est dans la magnifique municipalité de L’Ange-Gardien que nous recevons les groupes de toute tailles pour vivre du temps de qualité.</p>
        <p><a class="bouton bouton-entete decouvrez" href="cabane.php#menu">Découvrez notre menu</a></p>
      </div>
    </header>
    <main>
      <article>
        <div class="container accueil">
          <h2>Un lieu de rassemblement</h2>
          <p>C’est un lieu de rassemblement unique pour vous faite revivre le bon vieux temps durant un repas traditionnel des sucres à l’année comme le faisait nos grand-mères. De plus, c’est le lieu idéal pour des rencontres en famille et entre amis, des cérémonies de mariages, fonctions corporatives et autres. Vous retrouverez sur place une grande salle de réception pouvant accueillir 280 personnes et une plus petite idéale pour un groupe réduit ou un 5 à 7; un service de restauration maison et une boutique d’articles cadeaux contenant des produits de l’érable et autres attentions.</p>
          <p><a class="bouton bouton-main" href="histoire.php">En savoir plus</a></p>
        </div>
        <div class="container photos">
          <ul class="galerie">
            <li>
              <a href="#">
                <figure>
                  <img src="static/Dimensions_finales/Galerie_Depositphotos_95217842_xl-2015.png" alt="Tire sur la neige" />
                  <figcaption>
                    <span>
                      Cabane à sucre
                    </span>
                  </figcaption>
                </figure>
              </a>
            </li>
            <li>
              <a href="#">
                <figure>
                  <img src="static/Dimensions_finales/Galerie_Depositphotos_105674408_xl-2015.png" alt="Toast" />
                  <figcaption>
                    <span>
                      Réservation de la salle
                    </span>
                  </figcaption>
                </figure>
              </a>
            </li>
          </ul>
        </div>
      </article>
      <section class="contact">
        <div class="container max-width-1220 contactez-nous">
          <div class="row">
            <div class="col-md-6">
              <h2>Contactez-nous</h2>
              <address>

                <strong class="titre">Érablière St-Germain</strong>

                562 Chemain Doherty, L'Ange-Gardien<br>
                (Québec) J8L 0T4

                <strong class="telephone">
                  <a class="telephone" href="tel:+13115552368">(311) 555-2368</a>
                </strong>

                <strong class="titre">Pour toutes questions :</strong>
                <a href="mailto:info@erablierestgermain.ca">info@erablierestgermain.ca</a>
              </address>
              <div class="reseaux-sociaux">
                <a href="https://www.facebook.com/erablierestgermain/"><img src="static/Dimensions_finales/Icone_Facebook.png" alt="Facebook"></a>
                <a href="https://www.instagram.com/erablierestgermain/"><img src="static/Dimensions_finales/Icone_Insta.png" alt="Instagram"></a>
              </div>
            </div>
            <div id="map" class="col-md-6 googlemap">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.179355351843!2d-75.38227118443774!3d45.60703957910294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce3fa5a5c731d7%3A0xe3809d8d2128ae98!2s562%20Chemin%20Doherty%2C%20L&#39;Ange-Gardien%2C%20QC%20J8L%200T4!5e0!3m2!1sfr!2sca!4v1581258142421!5m2!1sfr!2sca" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
            </div>
          </div>
        </div>
      </section>
    </main>
  <?php include 'footer.php';?>






