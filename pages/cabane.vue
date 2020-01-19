<template>
  <div class="cabane">
    <header>
      <entete />
      <div class="container">
        <h1>Cabane à sucre</h1>
      </div>
    </header>
    <main>
      <div class="container texte max-width-1250">
        <h2>C'est enfin le temps de sortir de l'hivernation et de voir du monde!</h2>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Odio consequuntur culpa adipisci facere cupiditate? Reprehenderit perspiciatis blanditiis unde nulla dolor veniam quas tempore pariatur sunt culpa impedit ipsum assumenda aliquam saepe, quaerat corrupti illo deleniti ad beatae, alias totam tenetur iure! Placeat sint consequatur tempore. Id doloremque accusamus omnis ad.</p>
      </div>
      <section class="container menu-cabane max-width-1692">
        <div class="container texte max-width-1200">
          <h2>Tarifs</h2>
          <p>Du vendredi au dimance et lundi de Pâques</p>
          <div class="container">
            <div class="row">
              <div class="col-12">
                <h3>Brunch</h3>
                <ul>
                  <li>Adulte : <strong>24$</strong></li>
                  <li>8-13 ans : <strong>14,75$</strong></li>
                  <li>3-7 ans : <strong>10$</strong></li>
                  <li>Moins de 3 ans : <strong>gratuit</strong></li>
                </ul>
                <h3>Souper spectacle</h3>
              </div>
            </div>
            <div class="row">
              <div class="col-md-6">
                <h4>3 services</h4>
                <ul>
                  <li>Adulte : <strong>38$</strong></li>
                  <li>8-13 ans : <strong>22,50$</strong></li>
                  <li>3-7 ans : <strong>12,75$</strong></li>
                  <li>Moins de 3 ans<br>(non recommandé - très bruyant) :<br><strong>gratuit</strong></li>
                </ul>
              </div>
              <div class="col-md-6">
                <h4>Deluxe</h4>
                <ul>
                  <li>Adultes : <strong>45$</strong></li>
                  <li>8-13 ans : <strong>26.75$</strong></li>
                  <li>3-7 ans : <strong>15,50$</strong></li>
                  <li>Moins de 3 ans<br>(non recommandé - très bruyant) :<br><strong>gratuit</strong></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <p><strong>Réservation requise en tout temps <br>Accessible aux personnes à mobilité réduite</strong></p>
      </section>
      <section>
        <div class="container texte max-width-1250 pb200">
          <h2>De la tire en juillet, ça se peut!</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Excepturi adipisci, quod, labore ipsa pariatur corporis blanditiis ab corrupti voluptatem consequatur temporibus placeat quos, maxime omnis dicta quia eaque! Aliquam, praesentium!</p>
          <p><strong>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nihil minima corporis illum aperiam nam aut error earum voluptate ut culpa!</strong></p>
        </div>
      </section>
    </main>
    <div class="photos-page">
       <div class="container max-width-1250">
          <img src="../static/Dimensions_finales/photo-generique.png" alt="Photo de la cabane à sucre">
       </div>
    </div>
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

.container.max-width-1692 {
  max-width: 1692px !important;
  margin: 0 auto;
}
.menu-cabane {
  background: url(/_nuxt/static/Dimensions_finales/Bloc_texture_Accueil.png);
  border-top: 10px solid #FBB255;
  text-align: center;
  padding-top: 20px !important;
  padding-bottom: 85px!important;
}
.menu-cabane h3 {
  position: relative;
  z-index: 1;
  overflow: hidden;
  text-align: center;
  font-size: 36px;
  margin: 40px 0 24px 0;
}
.menu-cabane h3:before, .menu-cabane h3:after {
  position: absolute;
  top: 51%;
  overflow: hidden;
  width: 50%;
  height: 2px;
  content: '\a0';
  background-color: #FBB255;
}
.menu-cabane h3:before {
  margin-left: -52%;
  text-align: right;
}
.menu-cabane h3:after {
  margin-left: 2%;
}

.menu-cabane h4 {
  text-transform: uppercase;
  font-size: 30px;
}

.menu-cabane ul {
  margin: 0 0 30px 0;
  padding: 0;
  list-style: none;
  font-size: 28px;
  color: #7C4C0F;
  font-weight: bold;
}
.menu-cabane li {
  line-height: 1.4;
  padding: 24px 0;
}

.menu-cabane li:after {
  content: "";
  display: block;
  width: 50px;
  height: 2px;
  background-color: #FBB255;
  margin: 0 auto;
  position: relative;
  top: 23px;
}

.menu-cabane li:nth-last-child(1):after {
  display: none;
}

.menu-cabane strong {
  font-family: 'Hepta Slab', serif;
  font-size: 30px
}

</style>
