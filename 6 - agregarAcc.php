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

	textarea{
		background-color: lightgrey;
		}

	select{
		padding: 15px;
	}

	option{
		font: 15px;
	}

	.btn{
		background-color: blueviolet;
		color: white;
		font-weight: bold;
		cursor: pointer;
		border: 1px;
		}

	.btn:hover{
		background-color: #403F40;
		}

	input{
		padding: 17px;
		border: 0;
		background-color: #2A2A32;
		margin-bottom: 25px;
		color: #CDCBD2;
		outline: none;
		font-size: 15px;
		border-radius: 10px;
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


<?php
	
	$con = mysqli_connect("localhost", "root","","bdmorardo") or die ("ERROR AL CONECTARSE A LA BASE DE DATOS");
	$sql = "SELECT * FROM vehiculo";
	$resultado = mysqli_query($con,$sql);
	mysqli_close($con);  

?>


<center>
<form action="6 - agregarAcc2.php" method="post" enctype="multipart/form-data">
	
	<div class="content-box-blue">
	<h1>Morardo Seguros</h1>
	</div>

	<h2>Agregar Accidente</h2><hr>

	<h3>Escribir una descripción detallada de lo sucedido:</h3>
	<textarea name="descr" rows="20" cols="60" placeholder="Escriba aquí:"></textarea>


	<h3>Gravedad de daños:</h3>

	<select name="daños">
		
		<option>LEVE</option>
		<option>INTERMEDIOS</option>
		<option>GRAVES</option>
		<option>MUY GRAVES</option>

	</select>

	<h3>Seleccione el vehículo involucrado en el accidente:
	<br>
	<br>

	<select name="matricula">
	<?php

		while ($fila = mysqli_fetch_array($resultado)) {

			echo "<option value='$fila[MATRICULA]'>$fila[MATRICULA]</option>";

		}

	?>
	</select>
	</h3>
	
	<h3>Culpable:
	<br>
	<br>
	SI<input type="radio" name="culpable" value="si">
	NO<input type="radio" name="culpable" value="no">
	</h3>

		<h3>Seleccionar imágenes del accidente:</h3><br>
	<input type="file" name="img1" id="img1" accept="image/*" required><br>

	<input class="btn" type="submit" name="agregarveh" value="AGREGAR ACCIDENTE">



</form>
</center>
<br>
<br>
<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
</body>
</html>