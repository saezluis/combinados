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
    <header>
      <div class="ed-container">
        <div class="ed-item base-100 web-100 hd-100">
          <div class="logo-rekkit"><img src="img/logo-rekkit.png"/></div>
          <div class="logo-rekkitW"><img src="img/logo-rekkit.png"/></div>
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="birdsC"><img src="img/birds.png" alt=""/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.html" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
          <div class="silla2"><img src="img/silla.png" alt=""/></div>
          <div class="tango2"><img src="img/tango.png" alt=""/></div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-2">
          <h1>Ganas tú, gano yo... <span>Ganamos los 2</span></h1>
		  
          <form id="N" method="POST" action="procesar-jugar.php">
            <h2>Para participar, ingresar tus datos y número de factura </h2>
            <input type="text" name="nro_factura" placeholder="Ingresa el número de factura" required />
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required />
            <input type="text" name="apellido" placeholder="Ingresa tu apellido" required />
            <input type="text" name="telefono" placeholder="Ingresa tu número de teléfono" required />
            <div class="sep"></div>
            <label>Selecciona tu combinación</label>
            <input type="radio" name="combinacion" value="2" /><span>2x</span>
            <input type="radio" name="combinacion" value="3" /><span>3x</span>
            <input type="radio" name="combinacion" value="4" /><span>4x</span>
            <input type="submit" value="Enviar combinación"/>
          </form>
		  
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1">
          <div class="personas"><img src="img/personas.png"/></div>
		  
          <form id="M" method="POST" action="procesar-jugar.php">
            <h2>Para participar, debes ingresar el número de factura y tus datos</h2>
            <input type="text" name="nro_factura" placeholder="Ingresa el número de factura"/>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre"/>
            <input type="text" name="apellido" placeholder="Ingresa tu apellido"/>
            <input type="text" name="telefono" placeholder="Ingresa tu número de teléfono"/>
            <div class="sep"></div>
            <label>Selecciona tu combinación</label>
            <input type="radio" name="combinacion" value="2" /><span>2x</span>
            <input type="radio" name="combinacion" value="3" /><span>3x</span>
            <input type="radio" name="combinacion" value="4" /><span>4x</span>
            <input type="submit" value="Enviar combinación"/>
          </form>
		  
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