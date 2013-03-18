<?php
session_start();

include('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_jefe.php'); ?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h2>Administrar Trabajadores-Ausencias</h2>
		</div>
	  <div class="six columns">
		<div class="panel">
		  <h5>Listado Trabajadores Con Sus Ausencias</h5>
			<p>En este listado puedes observar a todos los trabajadores con sus respectivas ausencias solicitadas</p>
		  <a class="button" href="listado_trabajadores.php">Aceptar</a>
		</div>
	  </div>
	  <div class="six columns">
		<div class="panel">
		  <h5>Listado Ausencias Con Su Trabajador</h5>
			<p>En este listado puedes observar todas las ausencias con respectivo trabajador que la ha solicitado.</p>
		  <a class="button" href="listado_ausencias.php">Aceptar</a>
		</div>
	  </div>
	</div>
  <!-- Fin del contenido -->

<?php include('plantilla/pie.php'); ?>