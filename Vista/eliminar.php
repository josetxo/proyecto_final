<?php
	session_start();

	include('plantilla/cabecera.php');
	include ('plantilla/menu_admin.php');
?>

  <!-- Contenido -->

	<div class="row">
<?php
	require_once 'Controlador/controlador.php';
	
	$resp = Controlador::eliminarTrabajador($_POST['dni']);
	
	if($resp)
	{
		echo "trabajador eliminado";
	}
	else
	{
		echo "trabajador no encontrado";
	}
?>
	</div>
<?php include('plantilla/pie.php'); ?>