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


	h2{
		width: 400px;
		padding: 17px;
		background-color: #2E2E7A;
		color: #CDCBD2;
		
		font-size: 25px;
		border-radius: 10px;

	}

	h3{
		font-size: 45px;
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


	<h2>Ingreso de Vehículos</h2>

	<hr>



<?php

$marca = $_REQUEST['marca'];
$modelo = $_REQUEST['modelo'];
$año = $_REQUEST['año'];

$con = mysqli_connect("localhost", "root", "", "BDMorardo") or die("PROBLEMAS EN LA CONEXION");

$sql = "INSERT INTO marcas (MARCA, MODELO, AÑO) VALUES ('$marca','$modelo','$año')";

mysqli_query($con,$sql) or die ("NO SE PUDO AGREGAR LA MARCA");

mysqli_close($con);
echo "<h3>La marca fue agregada correctamente</h3>";
echo "<br>";
echo"<a href='3%20-%20Menu%20de%20opciones.html'>Volver a agregar vehículo</a>";
?>
</center>
</body>
</html>

