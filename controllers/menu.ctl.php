<?php 
	session_start();
	require 'models/funciones.model.php';
	$funciones = new funciones();
	$funciones->verificaSesion($_SESSION);
	require 'config.php';
	require 'views/head.view.php';
	require 'views/header.view.php';
	require 'views/begin.view.php';
	require 'views/welcome.view.php';
	require 'views/nav.view.php';
	require 'views/indicaciones.view.php';
	require 'views/end.view.php';
	
	