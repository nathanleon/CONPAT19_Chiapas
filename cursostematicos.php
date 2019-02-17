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
        <h2>Cursos temáticos</h2>
      </div>
      <div class="content-initial__p">
        <p>
          Durante el evento CONPAT 2019 los participantes podrán asistir a cursos temáticos.
        </p>
      </div>
      <div class="cont-table">
        <div class="item_table">
          <div class="tittle__item-t">Cursos</div>
          <div class="content__item-t">
          <p>Curso de introducción a la Patología</p>
          </div>
        </div>
        <div class="item_table">
          <div class="tittle__item-t">Descripción</div>
          <div class="content__item-t">
            <p>Con este curso entenderás el A, B y C de este tema, ya que su objetivo es: <br><br>
              Proveer las bases para entender los diferentes problemas patológicos que puedan presentar las estructuras de concreto armado y a base de perfiles metálicos; de acuerdo a los diferentes concretos que se pueden preparar, la interacción de los ambientes con el concreto/acero, así como otras acciones mecánicas/físicas importantes, que generan diferentes tipos de patologías que pueden incidir en la durabilidad de las construcciones.
            </p>
          </div>
        </div>
        <div class="item_table">
          <div class="tittle__item-t">Costo</div>
          <div class="content__item-t">
            <p>$350 USD ó $250 USD <br>si estás inscrito al congreso CONPAT. </p>
          </div>
        </div>
      </div>
      <div class="content-initial__p">
      <p> <span class="bolder-text">Dudas e información</span><br><br>
        Calendarización, Curricula, Profesores y método de pago, disponibles a partir del 30 de Marzo del 2019.<br>
        ¿requieres mayor información, contáctanos por: <br><br>
        E-mail: <a href="#">contacto@conpat2019.org</a> y <a href="#">oladistdr@gmail.com</a>
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
