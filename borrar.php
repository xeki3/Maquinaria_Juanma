<?php session_start();

require 'admin/config.php';
require 'functions.php';

comprobarSession();

$conexion = conexion($bd_config);
if (!$conexion) {
	header('Location: ../error.php');
}

$borrar =str_replace('"','',limpiarDatos($_GET['borrar']));
$id = limpiarDatos($_GET['id']);
$maquina = limpiarDatos($_GET['maquina']);

print_r($borrar);
print_r($id);
print_r($maquina);


if (!$id && !$maquina && !$borrar) {
	header('Location: '. RUTA.'error.php');
}

$statement = $conexion->prepare('DELETE FROM :borrar WHERE id = :id AND maquina = :maquina ');

// $statement = $conexion->prepare('DELETE FROM atornillador_tkt WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM bateria_taladro WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM caladora WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM cargador_baterias WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM dremel WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM esmeril_7 WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM esmeril_corte WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM esmeril_lija WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM lijadora WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM serrucho_corte WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM taladros_inalambricos WHERE id = :id AND maquina = :maquina UNION ALL DELETE FROM taladro_uh_700 WHERE id = :id AND maquina = :maquina');

$statement->execute(array('borrar' => $borrar, 'id'=> $id, 'maquina'=>$maquina));

// header('Location: '. RUTA);
// header('Location:'.RUTABUSCAR.$busqueda);
// header('Location:https://localhost/cursophp/Juanma/atornillador_tkt.php');

print_r($statement);

// require 'atornillador_tkt.php';
require 'views/borrar.view.php';

?>
