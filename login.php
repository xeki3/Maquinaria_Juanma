<?php session_start();

require 'admin/config.php';
require 'functions.php';
// comprobacion de si la sesion esta iniciada

if (isset($_SESSION['usuario'])) {
	header('Location: index.php');
}

$errores='';

if ($_SERVER['REQUEST_METHOD']== 'POST') {
	$usuario = filter_var(strtolower($_POST['usuario']),FILTER_SANITIZE_STRING);
	$password = $_POST['password'];
	// $password = hash('sha512', $password);

	try{
		$conexion = new PDO('mysql:host=localhost;dbname=juanma', 'root', '');
	}catch(PDOException $e) {
		echo "Error:" . $e->getMessage();
	}

	$statement = $conexion->prepare('SELECT * FROM usuarios WHERE usuario = :usuario AND password= :password');
	$statement->execute(array(':usuario' => $usuario, ':password' => $password));

	$resultado = $statement->fetch();

	if ($resultado !=false) {
		$_SESSION['usuario'] = $usuario;
		header('Location: index.php');
	}else {
		$errores .= '<li class="tituloini">Datos Incorrectos</li>';
	}
	// lo de bajo sirve para devolver boolean si tiene o no coincidencia de los datos
	// var_dump($resultado);


}



require 'views/login.view.php';


?>