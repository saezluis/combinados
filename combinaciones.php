<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"/>
    <link rel="stylesheet" href="css/styles.css"/>
    <link rel="shortcut icon" type="image/png" href="/favicon.png"/>
    <script src="js/jquery-1.12.0.min.js"></script>
    <script src="js/scripts.js"></script>
    <title>Combina2</title>
  </head>
  
	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-72574379-1', 'auto');
		ga('send', 'pageview');
	</script>
  
  <body>
    <div id="preloader">
      <div id="loader"></div>
    </div>
    <div class="menu_bar"><a href="#" class="bt-menu"><span><img src="img/menu.png"/></span>Menu</a></div>
    <?php
		include "menu.php";
	?>
	<!--
	<nav>
      <ul>
        <li><a href="index.html">Inicio</a></li>
        <li><a href="combinaciones.html">Combinaciones</a></li>
        <li><a href="premios.html">Premios</a></li>
        <li><a href="#">Bases</a></li>
        <li><a href="ganadores.html">Ganadores</a></li>
        <li><a href="contacto.html">Contacto</a></li>
      </ul>
    </nav>
	-->
    <header>
      <div class="ed-container">
        <div class="ed-item base-100 web-100">
          <div class="logo-rekkit"><img src="img/logo-rekkit.png"/></div>
          <div class="logos-paquete-top"><img src="img/otros-logos.png" alt=""/></div>
          <!-- <div class="logo-rekkitW"><img src="img/logo-rekkit.png"/></div> -->
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="birdsC"><img src="img/birds.png" alt=""/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.php" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-2">
          <h1>Ganas tú, gano yo... <span>Ganamos los 2</span></h1>
          <div class="combi-dataT">
            <h3>Combinaciones</h3>
            <ul class="combinaciones">
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x2 tus
                posibilidades de ganar.
              </li>
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x3 tus
                posibilidades de ganar.
              </li>
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x4 tus
                posibilidades de ganar.
              </li>
            </ul>
          </div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1">
          <p class="combina-text">Productos participantes</p>
          <div class="bodegon-combi"><img src="img/bodegon.png"/></div>
          <div class="combi-data">
            <h3>Combinaciones</h3>
            <ul class="combinaciones">
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x2 tus
                posibilidades de ganar.
              </li>
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x3 tus
                posibilidades de ganar.
              </li>
              <li>
                Por la compra de una combinación
                de 2 productos aumentas x4 tus
                posibilidades de ganar.
              </li>
            </ul>
          </div>
          <div class="logo-rekkit-leftCont"><img src="img/logo-rekkit.png"/></div>
          <div class="adelco-leftCont"><img src="img/logo-adelco.png"/></div>
        </div>
      </div>
    </header>
    <footer>
      <div class="ed-container total">
        <div class="ed-item base-50 no-padding web-50 no-padding">
          <div class="adelco"><img src="img/logo-adelco.png"/></div>
        </div>
        <div class="ed-item base-50 no-padding web-50 no-padding">
          <div class="otros-logos"><img src="img/otros-logos.png"/></div>
        </div>
      </div>
    </footer>
    <script>
      $(window).load(function() {
      $('#preloader').fadeOut('slow');
      $('body').css({'overflow':'visible'});
      });
    </script>
  </body>
</html>