<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM cargador_baterias");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);

comprobarSession();
require 'views/cargador_bateria.view.php';



?>