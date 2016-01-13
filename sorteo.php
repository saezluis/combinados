<?php

	include_once 'config.php';
	
	$conexion=mysqli_connect($host,$username,$password,$db_name) or die("Problemas con la conexión");
	$acentos = $conexion->query("SET NAMES 'utf8'");


	$registrosSorteo=mysqli_query($conexion,"SELECT * FROM sorteo where timestamp < \"2016-02-14\" AND estatus IS NULL ORDER BY RAND() LIMIT 1")or die("Problemas en el select:".mysqli_error($conexion));

	if($reg=mysqli_fetch_array($registrosSorteo)){	
		$nro_factura = $reg['nro_factura'];
		$id_almacenero = $reg['id_almacenero'];
	}	
	
	mysqli_query($conexion, "UPDATE sorteo SET estatus = 'ganador' WHERE nro_factura = $nro_factura ") or die("Problemas en el select:".mysqli_error($conexion));
	
	$registrosAlmacenero=mysqli_query($conexion,"SELECT * FROM almacenero WHERE id_almacenero = $id_almacenero")or die("Problemas en el select:".mysqli_error($conexion));
	
	if($reg=mysqli_fetch_array($registrosAlmacenero)){		
		$nro_factura_almacenero = $reg['nro_factura'];
		$nombre = $reg['nombre'];
		$apellido = $reg['apellido'];
		$telefono = $reg['telefono'];
		$timestamp = $reg['timestamp'];
	}
		

		echo "Numero de factura: ".$nro_factura_almacenero;
		echo "<br>";
		
		echo "Nombre: ".$nombre;
		echo "<br>";
		
		echo "Apellido: ".$apellido;
		echo "<br>";
		
		echo "Telefono: ".$telefono;
		echo "<br>";
		
		echo "Fecha del registro: ".$timestamp;
		echo "<br>";
	
?>