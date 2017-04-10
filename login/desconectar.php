<!-- Desconecta el usuario admnistrador o usuario -->

<?php 
session_start(); //Inicia sesion como usuario o administrador
if($_SESSION['user']){	
	session_destroy();
	header("location:index.php");
}
else{
	header("location:index.php");
}
?>
