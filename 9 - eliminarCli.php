<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Morardo Seguros</title>
	<style type="text/css">
		
				.content-box-blue{
		padding: 1px;
		border: 0;
		background-color: #031E57;
		margin-bottom: 25px;
		color: #CDCBD2;
		outline: none;
		font-size: 15px;
		border-radius: 10px;
		}

	h1{
		font-size: 55px;
	}

	h3{
		font-size: 55px;
	}

	
	body{
		background-color: #0A57FC;
		}


	a{
		padding: 8px;
		border: 0;
		background-color: ghostwhite;
		margin-bottom: 25px;
		color: black;
		outline: none;
		font-size: 15px;
		border-radius: 10px;
	}

	a:hover{
		background-color: gray;
	}

	</style>
</head>
<body>
<center>
	<div class="content-box-blue">
	<h1>Morardo Seguros</h1>
	</div>

<?php

$dni = $_REQUEST['dni'];

$con = mysqli_connect("localhost","root","","bdmorardo") or die ("ERROR AL CONECTARSE A LA BASE DE DATOS");

$sql = "DELETE FROM cliente WHERE DNI=$dni";

mysqli_query($con,$sql) or die ("No se pudo eliminar el cliente");

mysqli_close($con);
echo "<h3>El cliente se elimino correctamente.</h3>"
?>

<br>
<br>
<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
</center>
</body>
</html>