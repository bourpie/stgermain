<template>
  <nav id="nav" class="navbar navbar-expand-lg navbar-dark">
    <div class="container">
      <nuxt-link class="logo" to="/">
        <img src="../static/Dimensions_finales/Erabliere_St-Germain_logo_RENVERSE-1.png" alt="Logo de l'érablière St-Germain">
      </nuxt-link>
      <button
        class="navbar-toggler"
        type="button"
        data-toggle="collapse"
        data-target="#navbarNavDropdown"
        aria-controls="navbarNavDropdown"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item menu"><nuxt-link class="nav-link" to="/cabane">Cabane à sucre</nuxt-link></li>
            <li class="nav-item menu"><nuxt-link class="nav-link" to="/groupes">Groupes et événements</nuxt-link></li>
            <li class="nav-item menu"><nuxt-link class="nav-link" to="/histoire">Notre histoire</nuxt-link></li>
            <li class="nav-item menu"><nuxt-link class="nav-link" to="/contact">Contact</nuxt-link></li>
            <li><a href="#" class="bouton bouton-nav">Réservez</a></li>
          </ul>
      </div>
    </div>
  </nav>
</template>

<script>

import $ from 'jquery'

export default {
  mounted () {
    $(function () {
      let path = window.location.pathname
      path = path.replace(/\/$/, '')
      path = decodeURIComponent(path)

      $('.navbar a').each(function () {
        const href = $(this).attr('href')
        if (path.substring(0, href.length) === href) {
          $(this).closest('li').addClass('active')
        }
      })
    })
  }
}
</script>

<style>

.container {
    max-width: 1690px !important;
}

.navbar-toggler {
    position: relative;
    top: -30px;
    right: 20px;
}

nav.navbar {
  background: rgba(171,72,71,.8) !important;
}

.container {
  max-width: 1440px;
}

nav .container {
  padding: 55px 0;
}

nav.navbar-dark ul.navbar-nav li {
  line-height: 1;
}

nav.navbar-dark ul.navbar-nav li a.nav-link {
  border-right: 2px solid #D7944B;
  display: inline-block;
  font-size: 18px;
  font-weight: bold;
  color: white;
  text-decoration: none !important;
  text-transform: uppercase;
  padding: 3px 26px !important;
}

nav.navbar-dark ul.navbar-nav li a.nav-link:hover,
nav.navbar-dark ul.navbar-nav li.active a.nav-link {
    color: #D7944B;
}

nav.navbar-dark ul.navbar-nav li:nth-last-child(2) a.nav-link {
  border-right: none;
}

.bouton {
  text-transform: uppercase;
  font-size: 24px;
  font-weight: bold;
  height: 60px;
  line-height: 60px;
  padding: 0 26px;
  display: inline-block;
  border-radius: 46px;
  text-decoration: none !important;
}

.bouton-nav {
   background: white;
   color: #D7944B !important;
   margin: -20px 0 0 80px;
}

.bouton-entete {
    background: #FBB255;
    color: white !important;

}

.bouton-main {
  background: white;
  color: #D7944B !important;
  margin-bottom: 40px;
}

@media (max-width: 993px) {

  nav {
    text-align: center;
  }

  nav .logo {
    display: block;
    margin: 0 auto;
    position: relative;
    left: 27px;
  }

  nav ul{
    margin-top: 30px;
    text-align: center;
  }

  nav.navbar-dark ul.navbar-nav li a.nav-link {
    border-right: none;
    padding: 0;
    line-height: 46px;
    height: 46px;
    font-size: 24px;
  }

  .bouton-nav {
      margin: 50px 0 0 0;
      font-size: 24px;
  }

}
</style>
