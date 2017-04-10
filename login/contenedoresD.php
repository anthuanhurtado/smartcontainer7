<!DOCTYPE html>

<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:index.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index2.php");
}
?>

<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>SmartContainer</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
   	<link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
<body data-offset="40" style="background-attachment: fixed">

<nav class="navbar navbar-inverse">
<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">Usuarios Smart Container</a></li>			 	
		</ul>

		<ul class="nav navbar-nav">
    		<li class="active"><a href="http://localhost/smartContainer/login/admin.php">Usuarios registrados</a></li>
   		 </ul>

		<ul class="nav navbar-nav">
    		<li class="active"><a href="http://localhost/smartContainer/login/reportes_enviados.php">Reportes recibidos</a></li>
    	</ul>

    	<ul class="nav navbar-nav">
    		<li class="active"><a href="http://localhost/smartContainer/login/contenedoresD.php">Llenando de contenedor</a></li>
    	</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>
</nav>

<div class="container">
<header class="header">
<div class="row">

</div>
</header>

<div class="row">	
	<div class="span12">
		<div class="caption">
<!--///////////////////////////////Empieza cuerpo del documento interno///////////////////////////////-->
		<h2>Contenedores Disponibles</h2>	
		<div class="well well-small">

		<div class="row-fluid">
			<?php
				require("connect_db.php");
				$sql=("SELECT * FROM data"); 
				//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);
				echo "<table border='1'; class='table table-hover';>";
					echo "<tr class='warning'>";
						echo "<td>Llenado</td>";
					echo "</tr>";
			?>
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td>$arreglo[2]</td>";
					echo "</tr>";
				}
			?>
		</div>	
		</div>
		</div>
	</div>
</div>
    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>