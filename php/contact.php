<?php $page = 'contact';?>
<?php include 'head.php';?>
<header>
  <?php include 'nav.php';?>
  <div class="container">
    <h1>Contact</h1>
  </div>
</header>
<main>
  <div class="container texte max-width-1220 contactez-nous">
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

          <a href="#" class="btn btn-primary">RÉSERVATION</a>

        </div>
        <div class="col-md-6">
          <h2>Nous joindre</h2>
          <form  action="FormToEmail.php" method="post">
            <div class="form-group">
              <label for="nom">Votre nom*</label>
              <input type="text" name="name" class="form-control" id="nom" required>
            </div>
            <!--<div class="form-group">
              <label for="telephone">Votre numéro de téléphone*</label>
              <input type="text" class="form-control" id="telephone" required>
            </div>  -->                       
            <div class="form-group">
              <label for="courriel">Votre adresse courriel</label>
              <input  name="email" type="email" class="form-control" id="courriel">
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea name="comments" class="form-control" id="message"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
          </form>
        </div>
      </div>

  </div>
</main>
<div id="map" class="googlemap">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2791.179355351843!2d-75.38227118443774!3d45.60703957910294!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cce3fa5a5c731d7%3A0xe3809d8d2128ae98!2s562%20Chemin%20Doherty%2C%20L&#39;Ange-Gardien%2C%20QC%20J8L%200T4!5e0!3m2!1sfr!2sca!4v1581258142421!5m2!1sfr!2sca" width="100%" height="620" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</div>
<?php include 'footer.php';?>