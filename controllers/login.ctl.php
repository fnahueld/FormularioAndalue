<?php 

	$usuario = $_POST['usuario'];
	$password = $_POST['password'];
	require '../models/AAD.php';
	$bd = new baseDeDatos();
	$resultado = $bd->consulta("select * from usuario where idUsuario = '$usuario' and contrasenaUsuario = '$password'");
	if($bd->num_rows($resultado)>0){
		while($row = $bd->fetch_array($resultado))
		{
			
			session_start();
			$_SESSION['idUsuario'] = $row['idUsuario'];
			$_SESSION['nombreUsuario'] = $row['nombreUsuario'] ;
			$_SESSION['apellidoUsuario'] = $row['apellidoUsuario'] ;
			$_SESSION['tipoUsuario'] = $row['tipoUsuario'] ;
			header('location:../?url=menu');
		}
	}
	else
	{

		echo 'no hay';
	}

	