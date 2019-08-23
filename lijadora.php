<?php 

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM lijadora");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);

comprobarSession();
require 'views/lijadora.view.php';



?>