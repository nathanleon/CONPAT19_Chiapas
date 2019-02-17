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
        <h2>Programa general CONPAT Chiapas 2019</h2>
      </div>
      <div class="content__program">
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">6</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">Domingo</div>
            <div class="item_des">
              <li>
                Cursos Alconpat.
              </li>
              <!-- <li>Reunión del comité editorial de la Revista Alconpat por la tarde.</li> -->
              <li>Reuniones de las diferentes Direcciones de Alconpat.</li>
              <!-- <li>Inicio de incripciones en la tarde.</li> -->
            </div>
          </div>
        </div>
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">7</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">LUNES</div>
            <div class="item_des">
              <li>
                Reuniones de JDI y del Consejo Superior en la mañana.
              </li>
              <li>Reunión del comité editorial de la Revista Alconpat por la tarde.</li>
              <li>Reuniones de las diferentes Direcciones de Alconpat.</li>
              <li>Cursos Alconpat.</li>
              <li>Inicio de incripciones en la tarde.</li>
            </div>
          </div>
        </div>
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">8</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">MARTES</div>
            <div class="item_des">
              <li>Inauguración.</li>
              <li>Inicio de jornada de sesiones científicas.</li>
              <li>Cursos Alconpat.</li>
              <li>Brindis nocturno de apertura.</li>
            </div>
          </div>
        </div>
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">9</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">MIERCOLES</div>
            <div class="item_des">
              <li>Jornada de sesiones científicas.</li>
              <li>Cursos Alconpat.</li>
            </div>
          </div>
        </div>
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">10</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">JUEVES</div>
            <div class="item_des">
              <li>Cursos Alconpat.</li>
              <li>Cierre del congreso.</li>
            </div>
          </div>
        </div>
        <div class="item__promgram">
          <div class="date_p">
            <div class="tittle_date">Octubre</div>
            <div class="number_date">11</div>
          </div>
          <div class="description_content">
            <div class="tittle_des">VIERNES</div>
            <div class="item_des">
              <li>Inicio de los paquetes turísticos.</li>
              <li>Cierre de Cursos Alconpat</li>
            </div>
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
