<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Morardo Seguros</title>
	<style type="text/css">

	.content-box-blue{
		padding: 17px;
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

	body{
		background-color: #0A57FC;
		}
h3{
		font-size: 55px;
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
<br>
<br>
<br>



<?php
echo "<center>";
$dni = $_REQUEST['dni'];
$contra = $_REQUEST['contra'];

$con = mysqli_connect("localhost", "root", "", "BDMorardo") or die ("NO SE PUDO CONECTAR A LA BASE DE DATOS");

$sql = "SELECT * FROM usuarios WHERE DNI = '$dni' and CONTRASENIA = '$contra'";

$usuario = mysqli_query($con,$sql);
$cantFilas = mysqli_num_rows($usuario);

if ($cantFilas > 0) {
	echo "<h3>INICIO DE SESION EXISTOSA</h3><br>";
	echo "<br>";
	echo"<a href='3%20-%20Menu%20de%20opciones.html'>IR AL MENÚ DE OPCIONES</a>";
?>
<br><br>
<?php
}
else {
	
	echo "<h3>ERROR EN EL INICIO</h3><br>";
	echo "<br>";
	echo "<br>";
	echo"<a href='2%20-%20inicio.html'>INICIAR SESIÓN NUEVAMENTE</a>";
}

mysqli_close($con);
echo "</center>";
?>


</body>
</html>