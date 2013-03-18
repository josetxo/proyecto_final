<?php
	session_start();
	ob_start();
	
	require_once 'Controlador/controlador.php';
	
	$ausencia = unserialize($_SESSION['ausencia']);
	
	$id = $ausencia->getId_ausencia();
	
	if($_GET['resp'] == "aceptado")
	{
		Controlador::cambiarAusencia($id);
	}
	else
	{
		Controlador::eliminarAusencia($id);
	}

	header("LOCATION: listado_trabajadores.php");
?>