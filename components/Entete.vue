<template>
    <nav>
      <div class="conteneur clearfix">
        <nuxt-link to="/"><img src="../static/Dimensions_finales/Erabliere_St-Germain_logo_RENVERSE-1.png" alt="Logo de l'érablière St-Germain"></nuxt-link>
        <ul>
          <li class="menu"><nuxt-link to="/cabane">Cabane à sucre</nuxt-link></li>
          <li class="menu"><nuxt-link to="/groupes">Groupes et événements</nuxt-link></li>
          <li class="menu"><nuxt-link to="/histoire">Notre histoire</nuxt-link></li>
          <li class="menu"><nuxt-link to="/contact">Contact</nuxt-link></li>
          <li><a href="#" class="reservez">Réservez</a></li>
        </ul>
      </div>
    </nav>
</template>

<style>

nav {
  background: #000;
}

nav img {
  position: relative;
}

nav ul {
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  top: 75px;
  right: 30px;
}

nav ul li {
  display: inline-block;
}

nav ul li.menu:after {
  content: "|";
  display: inline-block;
  color: #D7944B;
  margin: 0 15px 0 20px;
}

nav ul li.menu:nth-last-child(2):after {
  content: "";
  margin-right: 50px;
}

nav ul li a {
  color: white;
  text-transform: uppercase
}

nav ul li a:hover {
  color: white;
}

.reservez {
  background: white;
  height: 30px;
  line-height: 30px;
  padding: 0 30px;
  display: inline-block;
  border-radius: 20px;
  color: #D7944B !important;
  text-decoration: none !important;
  font-weight: bold;
}

</style>
