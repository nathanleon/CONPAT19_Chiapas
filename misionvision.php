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
        <h2>MISIÓN</h2>
      </div>
      <div class="content-initial__p">
        <p>
          ALCONPAT Internacional es una Asociación no lucrativa de profesionales dedicados a la industria de la construcción en todas sus áreas, que conjuntamente coadyuvan a resolver los problemas que se presentan en las estructuras desde la planeación, diseño y proyecto hasta la ejecución, construcción, mantenimiento y reparación de las mismas, promoviendo la actualización profesional y la educación como herramientas fundamentales para salvaguardar la calidad y la integridad de los servicios de sus profesionales.
        </p>
      </div>
      <div class="content-initial__tittle">
        <h2>VISIÓN</h2>
      </div>
      <div class="content-initial__p">
        <p>
          Ser la Asociación de especialistas en control de calidad y patología de la industria de la construcción con mayor representatividad gremial y prestigio profesional reconocido internacionalmente, buscando siempre el beneficio social y el óptimo aprovechamiento de los recursos humanos, materiales y económicos para la construcción de estructuras sustentables y amigables con el medio ambiente.
        </p>
      </div>
      <div class="content-initial__figure">
        <figure><img src="assets/images/logo-mundo.png" height="200" alt="AI"></figure>
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
