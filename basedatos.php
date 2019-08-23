<?php session_start();

require 'admin/config.php';
require 'functions.php';


$conexion = conexion($bd_config);


if (!$conexion) {
	header('Location: error.php');
}
$herramientas = $conexion -> prepare("SELECT * FROM atornillador_tkt UNION ALL SELECT * FROM caladora UNION ALL SELECT * FROM taladros_inalambricos UNION ALL SELECT * FROM taladro_uh_700 UNION ALL SELECT * FROM dremel UNION ALL SELECT * FROM esmeril_7 UNION ALL SELECT * FROM esmeril_corte UNION ALL SELECT * FROM esmeril_lija UNION ALL SELECT * FROM bateria_taladro UNION ALL SELECT * FROM cargador_baterias UNION ALL SELECT * FROM lijadora UNION ALL SELECT * FROM serrucho_corte");

$herramientas->execute();
$herramientas = $herramientas->fetchAll();

// print_r($maquina);

comprobarSession();
require 'views/basedatos.view.php';



?>