<!-- Pagina principal -->
<!DOCTYPE html>

<?php
	session_start();
	if (@!$_SESSION['user']) {
		header("Location:index.php");
	}elseif ($_SESSION['rol']==2) {
		header("Location:index2.php");
	}
?>

<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/animate.css">
  <link rel="stylesheet" href="css/style.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <div class="Smart" >
  </div>
  <title> Smart Container</title> <!-- Titulo de pagina -->
</head>
<body>

<!-- Creacion de barra para poder moverse en la pagina -->
<nav class="navbar navbar-inverse"> <!-- Tipo de tabla -->
  <div class="container-fluid"> <!-- Se llama la clase -->
    <div class="navbar-header">
      <a class="navbar-brand" href="http://localhost/smartContainer/index.html">SmartContainer</a> <!-- Realiza un hipervinculo index -->
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="#">Inicio</a></li> <!-- Realiza un hipervinculo inicip -->
       <li class="active"><a href="http://localhost/smartContainer/contenedoresDisponibles.html">Contenedores Disponibles </a></li> <!-- Realiza un hipervinculo inicip -->
        <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="">Contenedores <span class="caret"></span></a> <!-- Realiza un hipervinculo contenedores -->
          <ul class="dropdown-menu"> <!-- Fromato para realizar un listado -->
          <li><a href="http://localhost/smartContainer/contenedores.html">Contenedor 1</a></li> 
          </ul>
        </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://twitter.com/Container_Smart"><span class="glyphicon glyphicons-mensaje-nuevo"></span>  Contactanos</a></li> <!-- Realiza un hipervinculo para contactar a los administradores -->
    <li><a href="http://localhost/smartContainer/reporte.html"><span class="glyphicon glyphicon-envelope"></span>  Reportar</a></li> <!-- Realiza un hipervinculo para poder realizar un reporte -->
      <li><a href="http://localhost/smartContainer/login/index.php"><span class="glyphicon glyphicon-log-in"></span>  Inicia Sesion</a></li> <!-- Realiza un hipervinculo inicia sesion o se registra -->
    </ul>
  </div>
</nav>

