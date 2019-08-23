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
	<div class="contenedorini">
		<h1 class="tituloini">Iniciar Sesion</h1>
		<hr class="borderini">

		<form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" accept-charset="utf-8" class="formularioini" name="login">
			<div class="form_group">
				<i class="icono izquierda fa fa-user"></i><input type="text" name="usuario" class="usuario" placeholder="USUARIO" value="">
			</div>

			<div class="form_group">
				<i class="icono izquierda fa fa-lock"></i><input type="password" name="password" class="password_btn" placeholder="CONTRASEÑA" value="">
				<i class="submit_btn fa fa-arrow-right" onclick="login.submit()"></i>
			</div>
			<?php if(!empty($errores)): ?>
				<div class="error">
					<ul>
						<?php echo $errores; ?>
					</ul>
				</div>
			<?php endif; ?>
		</form>
		<!-- <p class="texto-registrateini">
			¿ Aun no tienes cuenta ?
			<a href="registrate.php" title="">Registrate</a>
		</p> -->

	</div>
</body>
</html>