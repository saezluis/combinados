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
    <div class="header">
      <div class="ed-container total">
        <div class="ed-item base-100 web-100 hd-100">
          <div class="logo-rekkit"><img src="img/logo-rekkit.png"/></div>
          <div class="logo-rekkitW"><img src="img/logo-rekkit.png"/></div>
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="birds"><img src="img/birds.png" alt=""/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.html" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
        </div>
        <div class="sp-slideshow">
          <input id="button-1" type="radio" name="radio-set" checked="checked" class="sp-selector-1"/>
          <label for="button-1" class="button-label-1"></label>
          <input id="button-2" type="radio" name="radio-set" class="sp-selector-2"/>
          <label for="button-2" class="button-label-2"></label>
          <input id="button-3" type="radio" name="radio-set" class="sp-selector-3"/>
          <label for="button-3" class="button-label-3"></label>
          <label for="button-1" class="sp-arrow sp-a1"></label>
          <label for="button-2" class="sp-arrow sp-a2"></label>
          <label for="button-3" class="sp-arrow sp-a3"></label>
          <div class="sp-content">
            <div class="sp-parallax-bg"></div>
            <ul class="sp-slider clearfix">
              <li><img src="img/premio-caribe.png" alt="Caribe"/></li>
              <li><img src="img/premio-bs.png" alt="Buenos Aires"/></li>
              <li><img src="img/premio-chile.png" alt="viaje por chile"/></li>
            </ul>
          </div>
        </div>
        <section class="viajesM no-padding">
          <div class="ed-container total">
            <div class="ed-item base-100">
              <h1 class="gana">Ganas tú, gano yo... <span>Ganamos los 2</span></h1>
              <div class="line">
                <div class="viaje1"><img src="img/viaje_rio.png" alt=""/>
                  <div class="recorrido"><img src="img/line.png"/></div>
                </div>
                <div class="viaje2"><img src="img/viaje_bs.png" alt=""/></div>
                <div class="recorrido2"><img src="img/line2.png"/></div>
                <div class="viaje3"><img src="img/viaje_chile.png" alt=""/>
                  <div class="recorrido3"><img src="img/line2.png"/></div>
                  <div class="recorrido4"><img src="img/line.png"/></div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
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