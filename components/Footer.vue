<template>
  <footer>
    <div class="footer-adresse">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 logo">
            <img src="../static/Dimensions_finales/Erabliere_St-Germain_logo_RENVERSE-1.png" alt="Logo de l'érablière St-Germain">
          </div>
          <div class="col-sm-12 col-md-12 col-lg-6">
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
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 erabliere">Érablière St-Germain - Tous droits réservés - 2020</div>
          <div class="col-sm-12 col-md-12 col-lg-6 design">Pixel - Firme Créative</div>
        </div>
      </div>
    </div>
  </footer>
</template>
<style>

footer {
  position: relative;
}

footer .footer-adresse {
  padding: 50px 0;
  background: rgba(171,72,71,1);
  color: white;
}

footer address {
  text-align: right;
  position: relative;
  top: 20px;
}
footer .footer-adresse address a {
  display: inline-block;
  color: white;
  text-decoration: none !important;
}

footer .footer-adresse address a:after {
  content: "|";
  margin: 0 50px;
  color: #D7944B;
}

footer .footer-adresse address a:nth-last-child(1):after {
  content: "";
  margin: 0;
}

footer .footer-copyright {
  padding: 30px 0;
  position: relative;
  background: #7C4C0F;
  color: white;
}

footer .design {
  text-align: right;
}

/* Small devices (landscape phones) */
@media (max-width: 993px) {

  footer .logo,
  footer address,
  footer .erabliere,
  footer .design {
    text-align: center;
  }
  footer .logo {
    margin-bottom: 30px;
  }
  footer address {
    text-align: center;
    position: static;
  }
  footer .footer-adresse address a:after {
    margin: 0;
  }
  footer .erabliere {
    margin-bottom: 10px;
  }
}
</style>
