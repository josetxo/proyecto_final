<?php
session_start();

include('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h2>Administrar Trabajadores</h2>
		</div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Insertar Trabajador</h5>
			<p>En este formulario puedes insertar un trabajador</p>
		  <a class="button" href="insertar_trabajador.php">Aceptar</a>
		</div>
	  </div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Modificar Trabajador</h5>
			<p>En este formulario puedes modificar un trabajador.</p>
		  <a class="button" href="modificar_trabajador.php">Aceptar</a>
		</div>
	  </div>
	  <div class="four columns">
		<div class="panel">
		  <h5>Borrar Trabajador</h5>
			<p>En este formulario puedes borrar un trabajador.</p>
		  <a class="button" href="eliminar_trabajador.php">Aceptar</a>
		</div>
	  </div>
	</div>
  <!-- Fin del contenido -->

<?php include('plantilla/pie.php'); ?>