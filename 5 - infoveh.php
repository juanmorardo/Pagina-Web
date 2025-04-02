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

	table{
		background-color: lightslategray;
		border-radius: 5px;
	}

	tr{
		background-color: white;
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
	$con = mysqli_connect("localhost","root","","bdmorardo") or die("ERROR AL CONECTARSE A LA BASE DE DATOS");
	$sql1 = "SELECT * FROM cliente";
	$resultado = mysqli_query($con,$sql1);
	
?>

<form action="" method="get">

<center>
	<div class="content-box-blue">
	<h1>Morardo Seguros</h1>
	</div>

<h2>SELECCIONAR EL CLIENTE</h2><hr>
<h3>Cliente:</h3><select name="DNI">


<?php
while($fila = mysqli_fetch_array($resultado))
 {
	echo "<option value='$fila[DNI]'>$fila[APELLIDO], $fila[NOMBRE] [$fila[DNI]]</option>";
}
?>
<br>
</select><br><hr><br>
<input class="btn" type="submit" name="btVeh" value="VER VEHÍCULOS">


</form>
<br><br>
<table border="1px">


	<tr>
		<th>MATRICULA</th>
		<th>MARCA</th>
		<th>MODELO</th>
	
	</tr>
	


<?php
if(isset($_REQUEST['DNI']))

{
$sql2 = "SELECT * FROM vehiculo where DNI = $_REQUEST[DNI]";
	
	$resultado2 = mysqli_query($con,$sql2);
	mysqli_close($con);
	
while($fila = mysqli_fetch_array($resultado2)) {

echo "<tr><td> $fila[0]</td> <td> $fila[2] </td> <td> $fila[1] </td></tr>";


}

?>
</table>
<br>
<br>
</center>

<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
<?php
}
?>
</body>
</html>