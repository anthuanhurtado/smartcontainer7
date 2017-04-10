<?php
	$mysqli=new mysqli("if0ck476y7axojpg.cbetxkdyhwsb.us-east-1.rds.amazonaws.com","e0qdxtuvjldhi6k3","g3ot2891gpexabqi","wl8twhl9r8v33ts1"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error(); 
		exit();
	}
?>