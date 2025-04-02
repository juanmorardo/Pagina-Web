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


	h2{
		width: 400px;
		padding: 17px;
		background-color: #2E2E7A;
		color: #CDCBD2;
		
		font-size: 25px;
		border-radius: 10px;

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

	<h2>Agregar Accidente</h2>
	<hr>




<?php

$daños = $_REQUEST['daños'];
$matricula = $_REQUEST['matricula'];
$culpa = $_REQUEST['culpable'];
$descr = $_REQUEST['descr'];



$con = mysqli_connect("localhost", "root", "", "BDMorardo") or die("PROBLEMAS EN LA CONEXION");
$Nombre = $_FILES['img1']['name'];
$RutaOrigen = $_FILES['img1']['tmp_name'];
$RutaDestino = "IMAGENES/".$Nombre;
copy($RutaOrigen,$RutaDestino);


$sql = "INSERT INTO accidentes (DESCRIPCION, GRAVEDAD_DAÑOS, MATRICULA_VEH_INVOLUCRADO, CULPABLE, UBICACION, NOMBRE) VALUES('$descr', '$daños', '$matricula', '$culpa', '$RutaDestino', '$Nombre')";


mysqli_query($con,$sql) or die ("NO SE PUDO AGREGAR EL ACCIDENTE");

mysqli_close($con);
echo "<h3>El accidente fue agregado correctamente</h3>";
echo"<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>";
?>




	</center>
</body>
</html>