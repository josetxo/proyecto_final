<?php
	//namespace proyectoFCT\Vista;
	
	session_start();
	
//	require_once("Controlador/controlador.php");
	//require_once("Modelo/base/curso.php");

//	use proyectoFCT\Controlador\Controlador;
//	use proyectoFCT\Modelo\base\Curso;
 ?>
<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  
<?php
	//require_once("Modelo/base/paquete_base.php");
	//$alumno = unserialize($_SESSION['clase_usu']);
	
	//$curso = Controlador::obtenerCurso();
?>
  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Administrar alumnos</h3>
		</div>	
	</div>
	<div class="row">
		<form method="POST" action="" name="fModificar2">

			<div class="row">
			  <div class="five columns">

			<fieldset>
			<legend>Insertar Datos Trabajador</legend>

				<label>Nombre</label>
				<input type="text" name="nombre" id="nombre">

				<label>Primer apellido</label>
				<input type="text" name="apellido1" id="apellido1">
				
				<label>Segundo apellido</label>
				<input type="text" name="apellido2" id="apellido2">	

				<label>Telefono</label>
				<input type="text" name="telefono" id="telefono">	
				
				<label>Perfil</label>
				<select style="width:100px" name="perfil" id="perfil">
					<option>Perfil 1</option>
					<option>Perfil 2</option>
				</select>

				</br></br>

				<label>Centro</label>
				<select style="width:100px" name="centro" id="centro">
					<option>Centro 1</option>
					<option>Centro 2</option>
				</select>

			  </div>
		  </fieldset>

			  <div class="five columns">	

			<fieldset>
			<legend>Insertar Datos de Inicio De Sesion</legend>		
					
				<label>DNI</label>
				<input type="text" name="DNI" id="DNI">

				<label>Contraseña</label>
				<input type="password" name="pass" id="pass">		

			</fieldset>		

			  </div>
			 </div>


			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="button" value="Enviar" onclick="validar_insertar(fModificar2.nombre.value,)" />
					<input class="button right" type="reset" value="Borrar" />
				</div>
			</div>
		</form>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  