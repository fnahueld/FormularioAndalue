<?php
//session_start();
require_once("../BO/Autenticacion.php");

$metodo = $_POST['metodo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

$miautenticacion = new Autenticacion();

switch ($metodo) {
	//Metodo para iniciar sesion.
    case 0:
    	$resultado = $miautenticacion->autenticar($usuario, $contrasena);
    	echo json_encode($resultado);		 
    break;
    
}
?>