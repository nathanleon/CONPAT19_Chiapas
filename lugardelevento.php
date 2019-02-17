<!doctype html>
<html lang=''>

<head>
  <meta charset='utf-8'>
  <link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="assets/css/styles.css">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Roboto|Source+Sans+Pro" rel="stylesheet">
  <!-- css que afecta el slider -->
  <link rel="stylesheet" href="assets/css/ideal-image-slider.css">
  <link rel="stylesheet" href="assets/css/default.css">
  <!-- css que afecta el slider -->
  <script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
  <script src="assets/js/script.js"></script>
  <title>CONPAT MX 2019</title>
</head>

<body>
  <!-- aquí se carga el footer -->
  <?php require 'assets/partials/banner-menu.php' ?>
  <!-- aquí se carga el footer -->
  <section class="contenido">
    <div class="content-initial">
      <div class="content-initial__tittle">
        <h2>CENTRO DE CONVENCIONES "DR. MANUEL VELASCO SUÁREZ" <br>DE LA UNIVERSIDAD AUTÓNOMA DE CHIAPAS</h2>
      </div>
        <div class="content-initial__figure">
          <figure><img src="assets/images/UNACH-CATEDRA.jpg" height="250" alt="AI"></figure>
        </div>
      <div class="content-initial__figure">
        <figure><img src="assets/images/punto.png" width="90" height="90"></figure>
      </div>
      <div class="content-initial__figure">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d24474.755998319426!2d-93.152015!3d16.754194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x89cd09477284e00a!2sCentro+de+Convenciones+Manuel+Velasco+Su%C3%A1rez-UNACH!5e1!3m2!1ses!2smx!4v1530157571327" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
        <br><br>
      </div>

    </div>
  </section>

  <!-- aquí se carga el footer -->
  <?php require 'assets/partials/footer.php' ?>
  <!-- aquí se carga el footer -->
  <script src="assets/js/master.js"></script>
  <script src="assets/js/ideal-image-slider.js"></script>
  <script src="assets/js/iis-captions.js"></script>
  <script src="assets/js/iis-bullet-nav.js"></script>
  <script>
    var slider = new IdealImageSlider.Slider('#slider');
    slider.addCaptions();
    slider.addBulletNav();
    slider.start();
  </script>
</body>
<html>
