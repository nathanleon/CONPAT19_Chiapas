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
        <h2>TUXTLA GUTIÉRREZ, CHIAPAS, MÉXICO</h2>
      </div>
      <div class="content-initial__p">
        <p>
          De origen zoque (uno de los grupos étnicos que habitan el sur del país), Tuxtla es la ciudad más moderna de Chiapas, con centros comerciales y excelentes restaurantes, y el punto ideal para partir a conocer las maravillas naturales del estado y Pueblos Mágicos como San Cristóbal de las Casas.<br><br>Caminando por sus calles te encontrarás varias sorpresas, incluyendo un zoológico, plazas, parques, monumemtos y museos. Además, aquí podrás deleitarte con rica gastronomía y comprar bellas artesanías. <br><br><span><a href="https://www.google.com.br/maps/dir/Ciudad+de+M%C3%A9xico,+CDMX/Tuxtla+Guti%C3%A9rrez,+Chiapas/@18.0843501,-98.3645377,7z/data=!3m1!4b1!4m13!4m12!1m5!1m1!1s0x85ce0026db097507:0x54061076265ee841!2m2!1d-99.133208!2d19.4326077!1m5!1m1!1s0x85ecd85611d06e8f:0xdd78bd7b4662216a!2m2!1d-93.1029939!2d16.7516009" target="_blank">¿como llegar?</a> <img src="assets/images/ubicacion50x50.png" alt="" title="" width="20" height="20" border="0"></span> </p>
      </div>
      <div class="content-fig-tux">
      <div class="content-tux__figure">
        <figure class="tux__figure"><img src="assets/images/tuxtla_gutierrez-01.jpg" height="200" alt="AI"></figure>
         <div class="title_tux">Tuxtla Gutiérrez</div>
      </div>
      <div class="content-tux__figure">
        <figure class="tux__figure"><img src="assets/images/marimba1.jpg" height="200" alt="AI"></figure>
         <div class="title_tux">Parque Jardín de la Marimba</div>
      </div>
      <div class="content-tux__figure">
        <figure class="tux__figure"><img src="assets/images/zoomat1.jpg" height="200" alt="AI"></figure>
         <div class="title_tux">Zoológico "Miguel Álvarez del Toro"</div>
      </div>
      <div class="content-tux__figure">
        <figure class="tux__figure"><img src="assets/images/canon1.jpg" height="200" alt="AI"></figure>
         <div class="title_tux">Cañón del Sumidero</div>
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
