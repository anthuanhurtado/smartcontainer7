<!-- Inicia el login-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap-responsive.css">
	<link rel="stylesheet" type="text/css" href="estilos/estilos.css">
	<link rel="stylesheet" href="css/main.css">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	</div>
	<title> Smart Container</title> 
</head>
<body background="images/sca.jpg" style="background-attachment: fixed" >

<nav class="navbar navbar-inverse"> <!-- Muestra una tabla -->
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/smartContainer/index.html">SmartContainer</a> <!-- Direcciona a el index -->
    </div>
    <ul class="nav navbar-nav">
    	<li class="active"><a href="#">Inicio</a></li>
      	<li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Contenedores <span class="caret"></span></a>
	        <ul class="dropdown-menu"> <!-- Despliega una barra donde puedes seleccionar el contenedor  -->
        	
        	<li><a href="http://localhost/smartContainer/contenedores.html">Contenedor 1</a></li> <!-- Muestra la direccion y posisionamiento del contenedor -->
        	</ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
    	<li><a href="https://twitter.com/Container_Smart"><span class="glyphicon glyphicons-mensaje-nuevo"></span>  Contactanos</a></li>
		<li><a href="http://localhost/smartContainer/reporte.html"><span class="glyphicon glyphicon-envelope"></span>  Reportar</a></li> <!-- Al presionar clic derecho en la pagina te enviara al area de reportes donde podras ingresar tu correo y descripcion del reporte  -->
    	<li><a href="http://localhost/smartContainer/login/index.php"><span class="glyphicon glyphicon-log-in"></span>  Inicia Sesion</a></li> <!-- Al presionar clic derecho en la pagina te enviara al login y podras registrarte o iniciar sesion-->
    </ul>
  </div>
</nav>

	<center><div class="tit"><h2 style="color: #0000FF; ">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="password" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Ingresa tu nombre</b></label>
      <input type="text" name="realname" class="form-control" placeholder="Nombre" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu email</b></label>
      <input type="text" name="nick" class="form-control"  required placeholder="Email"/>
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Ingresa tu contraseña</b></label>
      <input type="password" name="pass" class="form-control"  placeholder="Contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt"><b>Repite tu contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="Repite contraseña" />
    </div>
      
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrate"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registra_usuario.php");
		}
	?>
<!--Fin formulario registro -->
</body>
</html>