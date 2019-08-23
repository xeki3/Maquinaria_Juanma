<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM taladro_uh_700");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);

comprobarSession();
require 'views/taladro_uh_700.view.php';



?>