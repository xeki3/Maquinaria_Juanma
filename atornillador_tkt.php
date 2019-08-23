<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM atornillador_tkt");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();


comprobarSession();
require 'views/atornillador_tkt.view.php';


?>