<?php
	
	include "config.php";
	
	$nombre_apellido = $_REQUEST['nombre_apellido'];
	@$nombre = $_REQUEST['nombre'];
	@$apellido = $_REQUEST['apellido'];
	$email = $_REQUEST['email'];
	$comentario = $_REQUEST['comentario']; 
	
	$nombre_final = $nombre_apellido.$nombre;
	
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");
	
	mysqli_query($conexion,"INSERT INTO contacto(nombre,apellido,email,comentario) values
							('$nombre_final',
							'$apellido',
							'$email',
							'$comentario'
							)")or die("Problemas con el insert del contacto");
							
	
	
?>
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
	<!--
    <div id="preloader">
      <div id="loader"></div>
    </div>
	-->
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
		  <!--	
          <h1>Hemos recibido tus comentarios <span>Atenderemos a la brevedad tu solicitud</span></h1>
          -->
		  <form id="N" method="POST" action="index.php">
			
			<p>Hemos recibido tus comentarios</p>
			<p>Atenderemos a la brevedad tu solicitud</p>
			<!--
            <input type="text" name="nombre_apellido" placeholder="Ingresa tu nombre y apellido" required/>
            <input type="text" name="email" placeholder="Ingresa tu mail" required/>
            <textarea name="comentario" placeholder="escríbenos" required></textarea>
			-->
            <input type="submit" value="Volver"/>
          </form>
		  
        </div>
        <div class="ed-item base-100 tablet-50 tablet-order-1">
          <div class="personas"><img src="img/personas.png"/></div>
		  
          <form id="M" method="POST" action="index.php">
           
			<p>Hemos recibido tus comentarios</p>
			<p>Atenderemos a la brevedad tu solicitud</p>
			<!--
            <input type="text" name="nombre_apellido" placeholder="Ingresa tu nombre y apellido" required/>
            <input type="text" name="email" placeholder="Ingresa tu mail" required/>
            <textarea name="comentario" placeholder="escríbenos" required></textarea>
			-->
            <input type="submit" value="Volver"/>
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
	/*
      $(window).load(function() {
      $('#preloader').fadeOut('slow');
      $('body').css({'overflow':'visible'});
      });
	  */
    </script>
	
  </body>
</html>