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
		font-size: 45px	;
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

	select{
		background-color: lightgrey;
		border-radius: 10px;
		padding: 15px;
	}

	select:hover{
		background-color: gray;
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

	<h2>Modificar Cliente</h2>
<?php

$con = mysqli_connect("localhost","root","","bdmorardo") or die ("ERROR AL CONECTARSE A LA BASE DE DATOS");

$sql = "SELECT * FROM cliente";

$resultado = mysqli_query($con,$sql);

?>

<h1>Modificar Cliente</h1>
<form method="get" action="">
	<h3>
		
	Cliente: 

	<select name="dni">
		
		<?php
		while ($fila = mysqli_fetch_array($resultado)) {
			$x="";
			if ($fila['DNI'] == $_REQUEST['DNI']) {
				$x = "selected";
			}
			echo "<option value='$fila[DNI]' $x> $fila[APELLIDO], $fila[NOMBRE] [$fila[DNI]]</option>";
		}
		?>

	</select>
	</h3>
<input class="btn" type="submit" name="Con" value="Consultar">
<hr>
</form>

<?php

if (isset($_REQUEST['dni'])) {
	$sql = "SELECT * FROM cliente WHERE dni = $_REQUEST[dni]";
	
	$resultado = mysqli_query($con,$sql);
	$fila = mysqli_fetch_array($resultado);
	mysqli_close($con);
	?>
	<form method="get" action="8 - ModificarClien2.php">
		<h3>Apellido: <input type="text" name="ape" value="<?php echo $fila['APELLIDO']; ?>"></h3>
		<h3>Nombre: <input type="text" name="nom" value="<?php echo $fila['NOMBRE']; ?>"><br></h3>
		 <input type="hidden"  name="dni" value="<?php echo $fila['DNI']; ?>">
		<h3>Contacto: <input type="number" name="contacto" value="<?php echo $fila['CONTACTO']; ?>"><br></h3>
		<h3>Direccion: <input type="text" name="dir" value="<?php echo $fila['DIRECCION']; ?>"><br></h3>
		<input class="btn" type="submit" name="mod" value="Modificar">
	</form>
	<br>
	<form action="9 - eliminarCli.php">
		<input type="hidden" name="dni" value='<?php echo $fila['DNI'];?>'>
		<input class="btn" type="submit" name="Eli" value="Eliminar">
	</form>
	<?php	
	
}
?>
</center>
<br>
<br>
<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
</body>
</html>