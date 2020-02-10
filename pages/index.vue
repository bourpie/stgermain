<template>
  <div class="accueil">
    <header class="header-accueil">
      <entete />
      <div class="container header-container-accueil">
        <h1 class="h1-container-accueil">À l'Érablière St-Germain, on sait recevoir!</h1>
        <p>L'érablière est situé dans un milieu consectetur adipisicing elit. Quod sint est enim excepturi exercitationem natus vero possimus amet harum, quaerat officia cumque quibusdam assumenda quas fugiat explicabo facere ipsa nostrum!</p>
        <p><a class="bouton bouton-entete decouvrez" href="#">Découvrez notre menu</a></p>
      </div>
    </header>
    <main>
      <article>
        <div class="container accueil">
          <h2>Un lieu de rassemblement</h2>
          <p>L'érablière est situé dans un milieu sit amet consectetur adipisicing elit. Cumque, laudantium! Modi praesentium, recusandae eligendi omnis ex architecto, vitae deserunt sapiente esse molestias error nemo quaerat enim rerum tempora sint veniam. Cum, obcaecati, delectus repellat atque in at sint deleniti itaque, odio dolore incidunt. Quam necessitatibus facere vero eius qui deleniti!</p>
          <p><a class="bouton bouton-main" href="#">En savoir plus</a></p>
        </div>
        <div class="container photos">

          <ul class="galerie">
            <li>
              <a href="#">
                <figure>
                  <img src="../static/Dimensions_finales/Galerie_Depositphotos_95217842_xl-2015.png" alt="Tire sur la neige" />
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
                  <img src="../static/Dimensions_finales/Galerie_Depositphotos_105674408_xl-2015.png" alt="Toast" />
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
                <a href="#"><img src="../static/Dimensions_finales/Icone_Facebook.png" alt="Facebook"></a>
                <a href="#"><img src="../static/Dimensions_finales/Icone_Insta.png" alt="Instagram"></a>
              </div>
            </div>
            <div id="map" class="col-md-6 googlemap">
              <p>Carte</p>
            </div>
          </div>
        </div>
      </section>
    </main>
    <pied />
  </div>
</template>

<script>

import entete from '@/components/Entete'
import pied from '@/components/Footer'

export default {
  components: {
    entete,
    pied
  }
}
</script>

<style>

.pb200 {
  padding-bottom: 200px !important;
}

.container.max-width-1200 {
  max-width: 1200px !important;
  margin: 0 auto;
  padding-top: 45px;
}

.container.max-width-1220 {
  max-width: 1220px !important;
}

.container.max-width-1250 {
  max-width: 1250px !important;
  margin: 0 auto;
  padding-bottom: 135px;
}

.container.max-width-1250.texte {
  padding-bottom: 200px;
}

.cabane .container.max-width-1250.texte {
  padding-bottom: 100px;
}

.container.max-width-1250 {
  max-width: 1250px !important;
  margin: 0 auto;
}

.container.max-width-1250 h2 {
  margin: 110px 0 30px 25px;
  max-width: 815px;
}

.container.max-width-1250 p {
  max-width: 1020px !important;
  margin-right: 25px;
  margin-left: 25px;
  color: #D7944B;
}

.container.max-width-1250 img {
  width: 100%;
  margin-top: -135px;
}

.photos-page {
  background: url("../static/Dimensions_finales/Bloc_texture_background_galerie-photos.png");
}

main article {
  text-align: center;
  color: #D7944B;
}

main article a {
  color: #D7944B !important;
  text-transform: uppercase;
  font-weight: bold;
}

main p {
  font-size: 24px;
}

header {
  color: white;
}

header:not(.header-accueil)  {
  height: 599px
}

header nav {
  background: transparent;
}

.accueil header > .container:not(.header-container-accueil) {
    padding: 0;
}

header h1:not(.h1-container-accueil) {
 font-size: 70px;
 font-weight: 800;
 padding-top: 140px;
 text-align: center;
 margin: 0;
}

header h1.h1-container-accueil {
 font-size: 70px;
 font-weight: 800;
 line-height: 1.1;
 text-align: center;
}

h2 {
  font-size: 40px;
  font-weight: 800;
  color:#AB4847;
  margin-bottom: 40px;
}

.accueil header {
  background: url("../static/Dimensions_finales/Photos_Header_Accueil_filtre.png");
}

.cabane header {
  background: url("../static/Dimensions_finales/Photos_Header_Cabane-a-sucre_filtre.png");
}

.contact header {
  background: url("../static/Dimensions_finales/Photos_Header_Contact_filtre.png");
}

.groupes header {
  background: url("../static/Dimensions_finales/Photos_Header_Groupe_et_evenements_filtre.png");
}

.histoire header {
  background: url("../static/Dimensions_finales/Photos_Header_Notre_histoire_filtre.png");
}

.accueil header > .container {
    padding: 120px 0 223px 0;
}

.accueil header h1 {
  text-align: left;
  max-width: 1050px;
  margin-bottom: 36px;
}

.accueil header p {
 font-size: 24px;
 max-width: 1050px;
 margin-bottom: 36px;
 line-height: 1.4;
 color: white;
}

.accueil main article .container.accueil {
  background: url("../static/Dimensions_finales/Bloc_texture_Accueil.png");
  border-top: 10px solid #FBB255;
  margin-top: -130px;
  padding: 110px 0 245px 0;
}

.accueil main article .container p {
  width: 70%;
  margin: 0 auto 50px auto;
}

.galerie {
  padding: 0;
  margin: -245px 0 80px 0;
  list-style: none;
}

.galerie li {
  display: inline-block;
  position: relative;
  margin-right: 48px;
}

.galerie li:nth-last-child(1) {
  margin-right: 0;
}

.galerie a {
  text-decoration: none !important;
}

.galerie li figure {
  position: relative;
  height: 492px;
  width: 100%;
}

.galerie li img {
  transition: all .3s ease-in-out;
}

.galerie li figure figcaption {
  position: relative;
  height: 445px;
  width: 91.6%;
  bottom: 470px;
  margin-bottom: -470px;
  left: 25px;
  background: rgb(124, 76, 15, 0);
  transition: all .3s ease-in-out;
}

.galerie li figure figcaption:hover {
  background: rgb(124, 76, 15, .7);
}

.galerie li figure figcaption span {
  position: absolute;
  top: 155px;
  left: 108px;
  background: rgb(124, 76, 15, .7);
  color: white;
  font-family: 'Hepta Slab', serif;
  font-size: 30px;
  width: 337px;
  line-height: 1.3;
  padding: 24px 55px;
  transition: all .1s;
}

.galerie li figure figcaption:hover span {
  background: rgb(124, 76, 15, 0);
}

.contactez-nous {
  padding-bottom: 60px;
}

.contactez-nous h2 {
  margin-bottom: 18px;
}

.contactez-nous address {
  color: #D7944B;
  font-size: 18px;
}
.contactez-nous address a {
  color: #D7944B;
  text-decoration: none !important;
}

.contactez-nous strong {
  display: block;
}

.contactez-nous strong.telephone {
  font-size: 24px;
  margin: 24px 0;
}

@media (max-width: 1690px) {
  .accueil header > .container {
      padding-left: 20px;
      padding-right: 20px;
  }
}

@media (max-width: 1273px) {

  .galerie li {
    display: inline-block;
    position: relative;
    margin-right: 0;
    margin-bottom: 20px;
  }

  .galerie li figure figcaption {
    height: 91.5%;
    width: 91.59%;
    bottom: 96.3%;
    margin-bottom: -96.3%;
    left: 4.3%;
  }

}

@media (max-width: 630px) {

  header h1 {
    font-size: 34px !important;
    text-align: center !important;
  }

  h2 {
    font-size: 30px;
  }

  .accueil header p {
    text-align: center;
    font-size: 24px;
    max-width: 90%;
    margin-left: auto;
    margin-right: auto;
  }

  .accueil header .bouton {
    font-size: 18px;
  }

  .galerie li img {
    width: 483px;
    height: 401.281px;
  }

  .galerie li figure {
    height: 401.281px;
  }

  .galerie li figure figcaption {
    height: 90.35%;
    width: 91.59%;
    bottom: 95.3%;
    margin-bottom: 91.59%;
    left: 4.3%;
  }

  .galerie li figure figcaption span {
    top: 119px;
    left: 54px;
  }

}

</style>
