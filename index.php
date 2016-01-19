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
	
	<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-72574379-1', 'auto');
		ga('send', 'pageview');
	</script>
	
  </head>
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
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.html" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
          <div class="silla"><img src="img/silla.png" alt=""/></div>
          <div class="tango"><img src="img/tango.png" alt=""/></div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-2 web-55 sd-55 hd-55 full-50">
          <h1>Ganas tú, gano yo... <span>Ganamos los 2</span></h1>
          <div class="claim-t">
            <p>
              Ingresa el número de factura y participa por
              espectaculares premios diarios y 3 increíbles
              viajes para 2 personas.
            </p>
          </div><a href="jugar.php" class="jugar-t">Participar</a>
          <div class="logos-paquete">
            <div class="medallas"><img src="img/medalla-1.png" alt=""/></div>
            <div class="medallas"><img src="img/medalla-2.png" alt=""/></div>
            <div class="medallas"><img src="img/medalla-3.png" alt=""/></div>
            <!-- <div class="medallas"><img src="img/medalla-1.png" alt=""/></div> -->
          </div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1 web-45 sd-45 hd-45 full-50 posicion-relative">
          <div class="bodegon"><img src="img/bodegon.png"/></div>
          <div class="personas">
            <img src="img/personas.png"/>
            <div class="pack-pree">
              <img src="img/paquete-premios.png" alt="">
            </div>
            </div>
          <div class="claim">
            <p>
              Ingresa el número de factura y participa por
              espectaculares premios diarios y 3 increíbles
              viajes para 2 personas.
            </p>
          </div><a href="jugar.php" class="jugar">Participar</a>
          <div class="logo-rekkit-left"><img src="img/logo-rekkit.png"/></div>
          <div class="adelco-left"><img src="img/logo-adelco.png"/></div>
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