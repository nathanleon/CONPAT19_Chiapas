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
        <h2>Ejes Temáticos</h2>
      </div>
      <div class="content-initial__p">
        <p>
          Aquí presentamos los ejes temáticos de CONPAT 2019 sobre los cuales los ponentes podrán desarrollar sus papers. Las áreas y subáreas pueden ser relacionadas entre sí, combinando cualquier área con cualquier subárea.
        </p>
      </div>
      <div class="cont-table">
        <div class="item_table">
          <div class="tittle__item-t">Áreas</div>
          <div class="content__item-t">
          <li>Control de calidad de las construcciones.</li>
          <li>Patología de las construcciones.</li>
          <li>Recuperación de las construcciones.</li>
          </div>
        </div>
        <!-- <div class="item_table">
          <div class="tittle__item-t">Áreas</div>
          <div class="content__item-t">
          <li>Control de calidad de las construcciones.</li>
          <li>Patología de las construcciones.</li>
          <li>Recuperación de las construcciones.</li>
          </div>
        </div> -->
        <div class="item_table">
          <div class="tittle__item-t">Subáreas</div>
          <div class="content__item-t">
            <li>Proyecto.</li>
            <li>Materiales.</li>
            <li>Materiales alternativos.</li>
            <li>Obras.</li>
            <li>Estructuras.</li>
            <li>Fallas en pavimentos.</li>
            <li>Elementos ornamentales.</li>
            <li>Instalaciones, redes de servicio.</li>
            <li>Acabados.</li>
            <li>Ejecución.</li>
            <li>Uso y mantenimiento.</li>
            <li>Tecnologías limpias.</li>
            <li>Grandes presas.</li>
            <li>Vulnerabilidad y riesgos en asentamientos <span class="tab_span">informales.</span>
            <li>Viviendas saludables.</li>
            <li>El factor humano.</li>
            <li>La seguridad.</li>
            <li>Aspectos legales, ética.</li>
            <li>Gestión.</li>
            <li>Educación y enseñanza.</li>
            <li>Normativa.</li>
            <li>Costos.</li>
            <li>Acción de clima, accidentes y meteoros.</li>
            <li>Otros</li>
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
