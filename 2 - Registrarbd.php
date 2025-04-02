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

$nom = $_REQUEST['nom'];
$ape = $_REQUEST['ape'];
$dni = $_REQUEST['dni'];
$cont = $_REQUEST['contacto'];
$dire = $_REQUEST['dire'];

$con = mysqli_connect("localhost", "root", "", "bdmorardo") or die("PROBLEMAS EN LA CONEXION");

$sql = "INSERT INTO cliente(DNI, NOMBRE, APELLIDO, CONTACTO, DIRECCION) VALUES ('$dni','$nom','$ape','$cont','$dire')";


mysqli_query($con,$sql) or die ("NO SE PUDO REGISTRAR EL CLIENTE");
mysqli_close($con);
echo "<h3>El cliente fue creado exitosamente</h3>";
echo"<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menu de opciones</a>";
?>


</center>
</body>
</html>