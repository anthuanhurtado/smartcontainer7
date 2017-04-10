<?php

extract($_POST);	//extraer todos los valores del metodo post del formulario de actualizar
	require("connect_db.php");
	$sentencia="update login set user='$user', password='$pass', email='$email', pasadmin='$pasadmin' where id='$id'";
	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$resent=mysqli_query($mysqli,$sentencia);
	if ($resent==null) {
		echo "Error de procesamieno no se han actuaizado los datos"; //En dado caso de mostrar error muestra el mensaje
		echo '<script>alert("Error en su actuaizacion")</script> '; //Si el scrip esta mal no actualiza y muestra un mensaje en error
		header("location: admin.php"); 
		
		echo "<script>location.href='admin.php'</script>";
	}else {
		echo '<script>alert("Usuario Actuaizado")</script> '; //En dado caso de tener una conexion exitosa muestra un mensaje de usuario actualizado
		
		echo "<script>location.href='admin.php'</script>";
		
	}
?>