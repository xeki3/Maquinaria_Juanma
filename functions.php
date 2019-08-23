<?php 

function conexion ($bd_config){
	try{
		$conexion = new PDO('mysql:host=localhost;dbname='.$bd_config['basedatos'], $bd_config['usuario'], $bd_config['pass']);
		return $conexion;
	}catch(PDOException $e){
		return false;
	}
}

function limpiarDatos($datos){
	$datos = trim($datos);
	$datos = stripslashes($datos);
	$datos = htmlspecialchars($datos);
	return $datos;
}

function comprobarSession(){
	if (!isset($_SESSION['usuario'])) {
		header('Location:'. RUTA);
	}
}

?>