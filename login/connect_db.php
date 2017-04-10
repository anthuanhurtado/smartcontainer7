<?php
		$mysqli = new MySQLi("localhost", "root","", "smartcontainer"); //conexion a base de datos forma local"
		if ($mysqli -> connect_errno) { // Se crea una condicion para cuando no tenga conexion muestre un error;
			die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno() 
				. ") " . $mysqli -> mysqli_connect_error());
		}
		else
?>