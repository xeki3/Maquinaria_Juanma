<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM esmeril_lija");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);


comprobarSession();
require 'views/esmeril_lija.view.php';



?>