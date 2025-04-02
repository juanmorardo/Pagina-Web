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

<form action="4 - AgregarMar2.php">
	
	<div class="content-box-blue">
	<h1>Morardo Seguros</h1>
	</div>

	<h2>Agregar Marca</h2><hr>

	<h3>Seleccionar una marca:
	<select name="marca">
		
		<option value="Ford">Ford</option>
		<option value="Fiat">Fiat</option>
		<option value="Peugeot">Peugeot</option>
		<option value="volkswagen">volkswagen</option>
		<option value="Toyota">Toyota</option>
		<option value="Chevrolet">Chevrolet</option>
		<option value="Renault">Renault</option>
		<option value="Audi">Audi</option>
		<option value="BMW">BMW</option>
		<option value="Mercedes Benz">Mercedes Benz</option>
		<option value="Mini">Mini</option>
		<option value="Mitsubishi">Mitsubishi</option>
		<option value="Subaru">Subaru</option>
		<option value="Jeep">Jeep</option>
		<option value="Citroen">Citroen</option>
		<option value="Lancia">Lancia</option>
		<option value="lamborghini">lamborghini</option>
		<option value="Ferrari">Ferrari</option>
		<option value="Aston Martin">Aston Martin</option>
		<option value="Porsche">Porsche</option>

	</select>
	</h3>


	<input type="text" name="modelo" placeholder="Modelo">

	<br>		

	<input type="text" name="año" placeholder="Año de producción">

	<br>

	<input class="btn" type="submit" name="agregarveh" value="AGREGAR">

</form>
</center>
<br>
<br>
<a href='4%20-%20AgregarVeh1.php'>Volver a la página anterior</a>
<br>
<br>
<a href='3%20-%20Menu%20de%20opciones.html'>Volver al menú de opciones</a>
</body>
</html>