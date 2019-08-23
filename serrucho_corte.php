<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM serrucho_corte");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);
comprobarSession();
require 'views/serrucho_corte.view.php';



?>