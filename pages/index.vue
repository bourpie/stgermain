<template>
  <div class="accueil">
    <entete />
    <header class="header-accueil">
      <div class="conteneur">
        <h1>À l'Érablière St-Germain, on sait recevoir!</h1>
        <p>L'érablière est situé dans un milieu consectetur adipisicing elit. Quod sint est enim excepturi exercitationem natus vero possimus amet harum, quaerat officia cumque quibusdam assumenda quas fugiat explicabo facere ipsa nostrum!</p>
        <p><a class="bouton bouton-page decouvrez" href="#">Découvrez notre menu</a></p>
      </div>
    </header>
    <main>
      <article>
        <div class="conteneur accueil">
          <h2>Un lieu de rassemblement</h2>
          <p>L'érablière est situé dans un milieu sit amet consectetur adipisicing elit. Cumque, laudantium! Modi praesentium, recusandae eligendi omnis ex architecto, vitae deserunt sapiente esse molestias error nemo quaerat enim rerum tempora sint veniam. Cum, obcaecati, delectus repellat atque in at sint deleniti itaque, odio dolore incidunt. Quam necessitatibus facere vero eius qui deleniti!</p>
          <p><a href="#">En savoir plus</a></p>
          <ul>
            <li>
              <a href="#">Cabane à sucre</a>
            </li>
            <li>
              <a href="#">Réservation de la salle</a>
            </li>
          </ul>
        </div>
      </article>
      <section class="contact clearfix">
        <div class="conteneur">
          <div class="colgauche">
            <h2>Contactez-nous</h2>
            <address>
              <strong>Érablière St-Germain</strong><br>
              562 Chemain Doherty, L'Ange-Gardien<br>
              (Québec) J8L 0T4<br>
              <a class="telephone" href="tel:+13115552368">(311) 555-2368</a>

              <strong>Pour toutes questions :</strong><br>
              <a href="mailto:info@erablierestgermain.ca">info@erablierestgermain.ca</a>
            </address>
            <div class="reseaux-sociaux" aria-label="Réseaux sociaux">
              <a href="#"><img src="../static/Dimensions_finales/Icone_Facebook.png" alt="Facebook"></a>
              <a href="#"><img src="../static/Dimensions_finales/Icone_Insta.png" alt="Instagram"></a>
            </div>
          </div>
          <div class="coldroite googlemap">
            <p>Carte</p>
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
h2 {
  font-size: 40px;
  font-weight: 800;
  color:#AB4847;
  margin-bottom: 40px;
}

main article {
  text-align: center;
}

main p {
  font-size: 24px;
}

.conteneur {
  max-width: 1440px;
  min-width: 1100px;
  padding: 50px 30px;
  margin: 0 auto;
  position: relative;
}

header {
  background: #CCCCCC;
  color: white;
}

.accueil header {
  background: url("../static/Dimensions_finales/Photos_Header_Accueil_filtre.png");
  padding: 100px 0 170px 0;
}

.accueil header h1 {
 font-size: 70px;
 font-weight: 800;
 max-width: 1050px;
 margin-bottom: 24px;
 line-height: 1.1
}

.accueil header p {
 font-size: 24px;
 max-width: 1050px;
 margin-bottom: 38px;
 line-height: 1.4;
}

.accueil main article .conteneur {
  background: url(/_nuxt/static/Dimensions_finales/Bloc_texture_Accueil.png);
  min-width: auto;
  margin: 0 auto;
  border-top: 10px solid #FBB255;
  margin-top: -120px;
  width: 1385px;
  padding: 85px;
}

.accueil header .bouton {

    background: #FBB255
;
    color: white;
    height: 60px;
    line-height: 60px;
    padding: 0 30px;
    display: inline-block;
    border-radius: 30px;
    text-transform: uppercase;
    font-size: 24px;
    font-weight: bold;
    text-decoration: none !important;

}

</style>
