<!-- Conexion del reporte para guardar -->
<?php 
	
	require('conexion.php');// Realiza la consulta a la conexion
	
	$email   =$_POST['email']; // se determina el campo de la base de datos con su variable
	$reporte =$_POST['reporte']; // se determina el campo de la base de datos con su variable
	
	$query="INSERT INTO reportes (id_report, email, reporte) VALUES ('','$email','$reporte')"; // Se hace un 
	$resultado=$mysqli->query($query);
?>

<html> <!-- Direccionamiento a verificar que su reporte se ha enviado exitosamente-->
	<head>
		<title></title>
	</head>
	<body>
		<center>	
			
			<?php if($resultado>0){ ?>
				<h1>Reporte Enviado</h1> <!-- Texto que mostrara en la vista -->
				<?php }else{ ?>
				<h1>Error al Enviar Reporte</h1>
			<?php	} ?>		
			
			<p></p>	
			
			<a href="index.html">Regresar</a> <!-- Al dar clic en regresar, direcciona a la pagina principal index -->
			
		</center>
	</body>
	</html>	