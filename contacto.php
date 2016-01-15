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
        <div class="ed-item base-100 web-100">
          <div class="logo-rekkit"><img src="img/logo-rekkit.png"/></div>
          <div class="logos-paquete-top"><img src="img/otros-logos.png" alt=""/></div>
<!--           <div class="logo-rekkitW"><img src="img/logo-rekkit.png"/></div> -->
          <div class="torres"><img src="img/torres.png"/></div>
          <div class="birdsC"><img src="img/birds.png" alt=""/></div>
          <div class="palmera"><img src="img/palmera.png"/></div><a href="index.php" class="logo"> <img src="img/logo.png"/></a>
          <div class="avion-left"><img src="img/avion-left.png"/></div>
          <div class="avion-right"><img src="img/avion-right.png"/></div>
          <div class="silla-Co"><img src="img/silla.png" alt=""/></div>
          <div class="tango-Co"><img src="img/tango.png" alt=""/></div>
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-2">
          <h2 >Ganas tú, gano yo... <span>Ganamos los 2</span></h2>
          <form id="N" method="POST" action="procesar-contacto.php">
            <h3>Es bueno estar conecta2</h3>
            <input type="text" name="nombre_apellido" placeholder="Ingresa tu nombre y apellido" required/>
            <input type="text" name="email" placeholder="Ingresa tu mail" required/>
            <textarea name="comentario" placeholder="escríbenos" required></textarea>
            <input type="submit" value="Enviar"/>
          </form>

        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1">
          <div class="personas"><img src="img/personas.png"/></div>
          <form id="M" method="POST" action="procesar-contacto.php">
            <h2>Es bueno estar conecta2</h2>
            <input type="text" name="nombre" placeholder="Ingresa tu nombre" required="true"/>
            <input type="text" name="apellido" placeholder="Ingresa tu apellido" required="true"/>
            <input type="text" name="email" placeholder="Ingresa tu mail" required/>
            <textarea name="comentario" placeholder="escríbenos" required></textarea>
            <input type="submit" value="Enviar"/>
          </form>
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