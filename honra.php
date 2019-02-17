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
        <h2>Comisión de honor</h2>
      </div><br>
      <div class="cont-table">
        <div class="item_table">
          <div class="tittle__item-t">Presidentes de CONPAT.</div>
          <div class="content__item-t">
            <li class="lista-content">Dante Domene</li>
            <li class="lista-content">Liana Arrieta de Bustillos</li>
            <li class="lista-content">Vitervo O'Reilly</li>
            <li class="lista-content">Dario Klein</li>
            <li class="lista-content">Ana Inés de la Fuente</li>
            <li class="lista-content">Máximo Corominas</li>
            <li class="lista-content">Pedro Castro Borges</li>
            <li class="lista-content">Angélica Ayala</li>
            <li class="lista-content">Rody Cabezas</li>
            <li class="lista-content">Patricia Martínez</li>
            <li class="lista-content">Francisco Ruiz</li>
            <li class="lista-content"> Sergio Espejo</li>
            <li class="lista-content">Fernando Branco</li>
            <li class="lista-content">Margita Kliewer</li>
          </div>
        </div>
        <div class="item_table">
          <div class="tittle__item-t">Sede</div>
          <div class="content__item-t">
            <li class="lista-content">Córdoba, Argentina (1991)</li>
            <li class="lista-content">Barquisimeto, Venezuela (1993)</li>
            <li class="lista-content">La Habana, Cuba (1995)</li>
            <li class="lista-content">Porto Alegre, Brasil (1997)</li>
            <li class="lista-content">Montevideo, Uruguay (1999)</li>
            <li class="lista-content">Santo Domingo, República Dominicana (2001)</li>
            <li class="lista-content">Telchac, México (2003)</li>
            <li class="lista-content">Asunción, Paraguay (2005)</li>
            <li class="lista-content">Quito, Ecuador (2007)</li>
            <li class="lista-content">Valparaíso, Chile (2009)</li>
            <li class="lista-content">La Antigua, Guatemala (2011)</li>
            <li class="lista-content">Cartagena de Indias, Colombia (2013)</li>
            <li class="lista-content">Lisboa, Portugal (2015)</li>
            <li class="lista-content">Asunción, Paraguay (2017)</li>
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
