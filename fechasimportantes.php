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
        <h2>Fechas importantes</h2>
      </div>
      <!-- <div class="content-initial__p"> -->
        <div class="content-initial__figure">
          <figure><img src="assets/images/fechas.png" height="180" alt="AI"></figure>
        </div>
      <!-- </div> -->
      <div class="cont-table">
        <div class="item_table">
          <div class="tittle__item-t">Evento</div>
          <div class="content__item-t">
          <li class="lista-content">Envío de resúmenes</li>
          <li class="lista-content">Aceptación de resúmenes</li>
          <li class="lista-content">Envío de trabajos</li>
          <li class="lista-content">Periodo de evaluación</li>
          <li class="lista-content">Aceptaciones</li>
          <li class="lista-content">Pronto pago</li>
          <li class="lista-content">CONPAT 2019</li>
          </div>
        </div>
        <!-- <div class="item_table">
          <div class="tittle__item-t">Áreas</div>
          <div class="content__item-t">
          <li class="lista-content">Control de calidad de las construcciones.</li>
          <li class="lista-content">Patología de las construcciones.</li>
          <li class="lista-content">Recuperación de las construcciones.</li>
          </div>
        </div> -->
        <div class="item_table">
          <div class="tittle__item-t">Fecha límite</div>
          <div class="content__item-t">
            <li class="lista-content">hasta el 30 de Diciembre 2018</li>
            <li class="lista-content">hasta el 30 de Diciembre 2018</li>
            <li class="lista-content">apartir del 30 de Diciembre 2018</li>
            <li class="lista-content">1 de Enero - 30 de Mayo 2019</li>
            <li class="lista-content">30 de Mayo 2019</li>
            <li class="lista-content">30 de Julio 2019</li>
            <li class="lista-content">8, 9 y 10 de Octubre 2019</li>
          </div>
        </div>
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
