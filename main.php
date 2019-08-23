<?php session_start();

require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);

if (!$conexion) {

	header('Location: error.php');
}

comprobarSession();
require 'views/main.view.php';

?>