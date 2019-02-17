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
        <h2>Conferencias magistrales</h2>
      </div>
      <div class="content-initial__p">
        <div class="p-content">
        <p>
          El CONPAT 2019 se complace en tener como conferencistas magistrales a distinguidos miembros de diversas áreas de nuestra comunidad:
        <ul>
            <li><span class="bolder-text">Oladis Troconis de Rincón</span> (Sesión especial por su 70° aniversario, CEC-LUZ, Maracaibo), Venezuela.</li>
            <li><span class="bolder-text">Paulo Helene</span> (Sesión especial por su 70° aniversario, PhD Ingenieria, Sao Paulo), Brasil.</li>
            <li><span class="bolder-text">Antonio Aguado de Cea</span> (Premio a la trayectoria Internacional de Alconpat, UPC, Barcelona), España.</li>
          </ul>
           Espera noticias nuevas sobre sus temas, su trayectoria y sus sesiones a fin de febrero del 2019.
         </p>
       </div>
      </div>
      <div class="content-initial__p">
        <p class="center-text">
          <img src="assets/images/doc_106706.png" width="138" height="138">
        </p>
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
