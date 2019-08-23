<?php session_start();
require 'admin/config.php';
require 'functions.php';

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: error.php');
}

if ($_SERVER['REQUEST_METHOD']== 'GET' && !empty($_GET['busqueda'])) {
	$busqueda = limpiarDatos($_GET['busqueda']);

	$statement = $conexion->prepare(
		"SELECT * FROM atornillador_tkt WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM bateria_taladro WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM caladora WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM cargador_baterias WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM dremel WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM esmeril_7 WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM esmeril_corte WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM esmeril_lija WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM lijadora WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM serrucho_corte WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM taladros_inalambricos WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda or maquina LIKE :busqueda or borrar LIKE :busqueda UNION ALL SELECT * FROM taladro_uh_700 WHERE numeroSerie LIKE :busqueda or ubicacion LIKE :busqueda or estado LIKE :busqueda or marca LIKE :busqueda or adquisicion LIKE :busqueda or responsable LIKE :busqueda or ubicacion_reparacion LIKE :busqueda");

	$statement->execute(array(':busqueda'=> "%$busqueda%"));
	$resultados = $statement->fetchAll();

	if (empty($resultados)) {
		$titulo = 'No se encontro maquinaria con el resultado: ' . $busqueda;
	}else{
		$titulo = 'Resultados de la busqueda: ' . $busqueda;
	}
}else{
	header('Location: ' . RUTA . '/index.php');
}


// print_r($resultados);

comprobarSession();
require 'views/buscar.view.php';


?>