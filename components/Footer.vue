<template>
  <footer>
    <div class="footer-adresse">
      <div class="conteneur">
        <img src="../static/Dimensions_finales/Erabliere_St-Germain_logo_RENVERSE-1.png" alt="Logo de l'érablière St-Germain">
        <address>
          <strong>
            562 Chemain Doherty, L'Ange-Gardien (Québec) J8L 0T4
          </strong><br>
          <a class="telephone" href="tel:+13115552368">
            (311) 555-2368
          </a>
          <a href="mailto:info@erablierestgermain.ca">
            info@erablierestgermain.ca
          </a>
        </address>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="conteneur clearfix">
        <p class="erabliere">
          Érablière St-Germain - Tous droits réservés - 2020
        </p>
        <p class="pixel">
          Pixel - Firme Créative
        </p>
      </div>
    </div>
  </footer>
</template>
<style>

footer {
  position: relative;
}

.footer-adresse {
  background: #000000;
  color: white;
}

.footer-adresse address {
  position: absolute;
  top: 80px;
  right: 30px;
  text-transform: uppercase;
  line-height: 30px;
}

.footer-adresse address a {
  display: inline-block;
  color: white;
  text-decoration: none !important;
}

.footer-adresse address a:after {
  content: "|";
  margin: 0 50px;
}

.footer-adresse address a:nth-last-child(1):after {
  content: "";
  margin: 0;
}

.footer-copyright {
  position: relative;
  background: #333333;
  color: white;
}

.footer-copyright p {
  margin: 0;
}

.footer-copyright p.erabliere {
  float: left;
  width: 50%;
}

.footer-copyright p.pixel {
  float: right;
  width: 50%;
  text-align: right;
}

</style>
