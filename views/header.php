<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Oswald&display=swap" rel="stylesheet">
	<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<title>Pyme</title>
	<link rel="stylesheet" href="<?php echo RUTA; ?>/css/estilos.css">
</head>
<body>
	<header>
		<div class="contenedor">
			<div class="logo izquierda">
				<p><a href="<?php echo RUTA; ?>" title=""><h2>MAQUINARIA</h2></a></p>
			</div>
			<div class="derecha">
				<form name="busqueda" class="buscar" action="<?php echo RUTA; ?>/buscar.php" method="get">
					<input type="text" name="busqueda" value="" placeholder="buscar"><button type="submit" class="icono fa fa-search"></button>	
				</form>
				<nav class="menu">
					<ul>
						<li><a href="#" title="">Contacto<i class="icono fa fa-envelope"></i></a></li>
						<li><a href="cerrar.php" title="">Cerrar Sesion<i class=" icono fa fa-sign-out" aria-hidden="true"></i></a></li>


					</ul>
				</nav>
			</div>
		</div>
	</header>