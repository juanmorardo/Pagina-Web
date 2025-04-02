<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Morardo seguros</title>
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
		font-size: 30px;
	}

	body{
		background-color: #0A57FC;
		}

	.btn{
		background-color: blueviolet;
		color: white;
		font-weight: bold;
		cursor: pointer;
		border: 1px;
		font-size: 20px;
		}

	.btn:hover{
		background-color: #403F40;
		}
	select{
		background-color: lightgrey;
		border-radius: 10px;
		padding: 15px;
	}

	select:hover{
		background-color: gray;
	}

	input{	
		padding: 15px;
		border: 0;
		background-color: lightgrey;
		margin-bottom: 25px;
		color: black;
		outline: none;
		font-size: 15px;
		border-radius: 10px;
	}
	input:hover{
		background-color: gray;
	}

	::placeholder{
		color: black;
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

<?php

$con =mysqli_connect("localhost","root","","bdmorardo") or die ("ERROR AL CONECTARSE A LA BASE DE DATOS");

$sql1 = "SELECT * FROM cliente";
$sql2 = "SELECT * FROM marcas";

$resultado1 = mysqli_query($con,$sql1);
$resultado2 = mysqli_query($con,$sql2);

mysqli_close($con);

?>


<form action="4 - AgregarVeh.php">
	
	<div class="content-box-blue">
	<h1>Morardo Seguros</h1>
	</div>

	<h2>Agregar Vehículo</h2><hr>

	<h3>Cliente: <select name="dni" >
		
	<?php
	while ($fila1 = mysqli_fetch_array($resultado1)) {
			echo "<option>$fila1[DNI]</option>";
	}
	?>

	</select>
	</h3>
	

	<h3>Marca de auto: <select name="marca">
		
	<?php
	while ($fila2 = mysqli_fetch_array($resultado2)) {

		echo "<option value='$fila2[MARCA]|$fila2[MODELO]'> $fila2[MARCA], $fila2[MODELO] [$fila2[AÑO]]";
	}	
	?>
	</select>
	</h3>

	<input type="text" name="matricula" placeholder="Matrícula">

	<br>		

	<input class="btn" type="submit" name="agregarveh" value="AGREGAR">

</form>
</center>
<br>
<br>
<a href='4%20-%20AgregarMar.php'>Agregar Marca de vehículos</a>
<br>
<br>
<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
</body>
</html>