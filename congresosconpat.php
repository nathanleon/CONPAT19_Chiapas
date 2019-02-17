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
        <h2>Congresos CONPAT</h2>
      </div>
      <div class="content-initial__p">
        <p>
          ALCONPAT-Internacional da sustento a los congresos CONPAT, cada dos años a nivel internacional en año impar y cada dos años a nivel nacional, en año par, en cada uno de los países miembros, donde se celebra un evento científico que cada vez más da respuesta a los problemas
          típicos de la construcción. Hasta ahora se han registrado más de 3000 profesionales en los 12 Congresos realizados en Córdoba, Argentina (1991), Barquisimeto, Venezuela (1993), La Habana, Cuba (1995), Porto Alegre, Brasil (1997), Montevideo,
          Uruguay (1999), Santo Domingo, República Dominicana (2001), Telchac, México (2003), Asunción, Paraguay (2005), Quito, Ecuador (2007), Valparaíso, Chile (2009), La Antigua, Guatemala (2011), Cartagena de Indias, Colombia (2013), Lisboa, Portugal (2015), y Asunción, Paraguay (2017), cuyos presidentes respectivos han sido: Dante Domene, Liana Arrieta de Bustillos, Vitervo O'Reilly, Dario Klein, Ana Inés de la Fuente, Máximo Corominas, Pedro Castro Borges, Angélica Ayala, Rody Cabezas, Patricia Martínez, Francisco Ruiz, Sergio Espejo, Fernando Branco y Margita Kliewer.
        </p>
      </div>
      <div class="content-initial__figure">
        <figure><img src="assets/images/logo-alconpat.png" height="200" alt="AI"></figure>
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
