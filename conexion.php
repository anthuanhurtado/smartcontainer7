<?php
	$mysqli=new mysqli("if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","m6d3k1z0cqwcni4q","ajfhqkpzr0yxkc3k","emqspgab8vxw1amx"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error(); 
		exit();
	}
?>