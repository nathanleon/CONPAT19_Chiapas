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
        <h2>Alconpat Internacional</h2>
      </div>
      <div class="content-initial__p">
        <p>
          Asociación Latinoamericana de Control de Calidad, Patología  y Recuperación de la Construcción, Internacional, Asociación Civil se define como una asociación sin fines de lucro, cuyos fines son: <br>
          <br>
          a).- Contribuir al desarrollo científico y técnico de toda la comunidad Latinoamericana relacionada con la construcción y sus materiales, con énfasis en la gestión de la calidad, la patología y la recuperación de las construcciones. <br><br>
          b).- Actuar como interlocutor calificado, tanto de la propia sociedad civil como de sus poderes públicos representativos. <br><br>
          c).- Promover el papel de la ciencia y la tecnología de la construcción y sus materiales, y contribuir a su difusión como un bien necesario que es para toda la sociedad Latinoamericana. La asociación no tendrá en ningún momento fines lucrativos o económicos en el beneficio de sus asociados.</p>
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
