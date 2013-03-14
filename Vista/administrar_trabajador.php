<?php
session_start();

include('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_trabajador.php'); ?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h2>Administrar Ausencias</h2>
		</div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Insertar Ausencia</h5>
			<p>En este formulario puedes insertar una Ausencia.</p>
		  <a class="button" href="insertar_ausencia.php">Aceptar</a>
		</div>
	  </div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Modificar Ausencia</h5>
			<p>En este formulario puedes modificar una Ausencia.</p>
		  <a class="button" href="modificar_ausencia.php">Aceptar</a>
		</div>
	  </div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Borrar Ausencia</h5>
			<p>En este formulario puedes borrar una Ausencia.</p>
		  <a class="button" href="eliminar_ausencia.php">Aceptar</a>
		</div>
	  </div>
	</div>
  <!-- Fin del contenido -->

<?php include('plantilla/pie.php'); ?>