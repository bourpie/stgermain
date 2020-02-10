<footer>
    <div class="footer-adresse">
      <div class="container">
        <div class="row">
          <div class="col-sm-12 col-md-12 col-lg-6 logo">
            <img src="static/Dimensions_finales/Erabliere_St-Germain_logo_RENVERSE-1.png" alt="Logo de l'érablière St-Germain">
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
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>  
  <script>
    $(function () {

      var path = window.location.pathname;
      var page = path.split("/").pop();

      $('.navbar a').each(function () {
        var href = $(this).attr('href');
        if (page.substring(0, href.length) === href) {
          $(this).closest('li').addClass('active');
        }
      })
      
    })
  </script>
  </body>
</html>