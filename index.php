<!doctype html>
<html lang='es'>

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
  <section id="banner-slide">
    <div class="banner">
      <div id="slider">

      <img data-src="assets/images/01.jpg" data-src-2x="assets/images/01.jpg" src="" data-caption="#caption-a4" />

      <img data-src="assets/images/02.jpg" data-src-2x="assets/images/2.jpg" src="" data-caption="#caption-a3" />

      <img data-src="assets/images/03.jpg" data-src-2x="assets/images/3.jpg" src="" data-caption="#caption-1-1" />

      <img data-src="assets/images/04.jpg" data-src-2x="assets/images/04.jpg" src="" data-caption="#caption-1-2" />

      </div>
  </section >
  <section class="contenido">
  <div class="contenido-1">

    <p class="center-text bolder-text">8, 9 y 10 DE OCTUBRE DEL 2019 <br>TUXTLA GUTIÉRREZ, CHIAPAS, MÉXICO<br>XV CONGRESO LATINO-AMERICANO DE PATOLOGÍA DE CONSTRUCCIÓN<br> XVII CONGRESO DE CONTROL DE CALIDAD EN LA CONSTRUCCIÓN <br>
    </p>
    <p class="center-text">
      Con el auspicio de ALCONPAT-INTERNACIONAL se analizarán las mejores estrategias y tecnologías <br> para actuar en el sector de la construcción /rehabilitación, con la presentación de estudios de casos y conferencias; <br> será un importante foro
      internacional del sector de la construcción
    </p>
  </div>
  </section>
  <section class="contenido">
    <div class="contenido-2">
      <div class="contenido-2__tittle">
        <h2>Envio de resumenes</h2>
      </div>
      <div class="contenido-2__p">
        <p>
          GRACIAS por participar, adjunte su resumen antes del 30 de Diciembre 2018.<br><br>Descargue el formato de resumen y la guía de apoyo para su envío <a class="bolder-text" href="http://alconpat.org/conpat2019/assets/files/Formato%20de%20resumen%20y%20guia%20de%20env%C3%ADo,%20conpat2019.pdf" title="" target="_blank">aquí.</a><br>
        </p>
        <p>Deberá registrarse e iniciar sesión:<br>
  Si no tiene una cuenta, puede crearla <a class="bolder-text" href="http://congresoconpat.org/index.php/congresosconpat/conpat2019/user/account" title="" target="_blank">aquí.</a><br>
  Si ya tiene una cuenta, acceda <a class="bolder-text" href="http://congresoconpat.org/index.php/congresosconpat/conpat2019/login" title="" target="_blank">aquí.</a><br>
        </p>
            <p>Para cualquier duda o aclaración favor de comunicarse a: <a class="bolder-text" href="mailto:conpat2019@gmail.com">conpat2019@gmail.com</a> o al (961) 61-5-03-22 ext 114.</p>
        <p class="center-text">
          <a href="http://congresoconpat.org/index.php/congresosconpat/conpat2019/login" target="_blank"><img src="assets/images/nosocios.png" width="138" height="138"></a> <br> Envio de resumenes
        </p>
      </div>
    </div>
  </section>
  <section class="contenido">
    <div class="contenido-3">
      <div class="contenido-3__tittle">
        <h2>Conozca más acerca de...</h2>
      </div>
      <div class="contenido-3__items">
        <div class="items-c3">
          <div class="contenido-3__p">
            <a href="programa.php" target="_blank"><img src="assets/images/doc_106706.png" width="142" height="142"></a> <br> Programa del congreso
          </div>
        </div>
        <div class="items-c3">
          <div class="contenido-3__p">
            <a href="magistrales.php" target="_blank"><img src="assets/images/user_106613.png" width="142" height="142"></a> <br> Conferencias <br>magistrales
          </div>
        </div>
        <div class="items-c3">
          <div class="contenido-3__p">
            <a href="tematicas.php" target="_blank"><img src="assets/images/user_106613.png" width="142" height="142"></a> <br> Conferencias <br>temáticas
          </div>
        </div>
        <div class="items-c3">
          <div class="contenido-3__p">
            <a href="paquetes.php" target="_blank"><img src="assets/images/image_106643.png" width="142" height="142"></a> <br> Lugares turísticos
          </div>
        </div>
        <div class="items-c3">
          <div class="contenido-3__p">
            <a href="inscripciones.php" target="_blank"><img src="assets/images/pencil_106685.png" width="142" height="142"></a> <br> Incripciones
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
