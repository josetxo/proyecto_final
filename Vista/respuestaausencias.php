<?php
	session_start();
	ob_start();
	
	require_once 'Controlador/controlador.php';
	
	$ausencia = unserialize($_SESSION['ausencia']);
	
	$id = $ausencia_>getId();
	
	if($_GET['resp'] == "aceptado")
	{
		Controlador::cambiarAusencia($id);
	}
	else
	{
		Controlador::eliminarAusencia($id);
	}

	ob_clear();
	header("LOCATION: listado_trabajadores.php");
?>