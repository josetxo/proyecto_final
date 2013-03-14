<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Administrar Trabajadores</h3>
		</div>	
	</div>
	<div class="row">
		<form name="fInsert">

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
						<select style="width:100px" name="id_perfil" id="id_perfil">
							<option>Perfil 1</option>
							<option>Perfil 2</option>
						</select>

						</br></br>

						<label>Centro</label>
						<select style="width:100px" name="id_centro" id="id_centro">
							<option>Centro 1</option>
							<option>Centro 2</option>
						</select>

				    </fieldset>

			    </div>


			    <div class="five columns">	

					<fieldset>
					<legend>Insertar Datos de Inicio De Sesion</legend>		
							
						<label>DNI</label>
						<input type="text" name="dni" id="dni">

						<label>Contraseña</label>
						<input type="password" name="pass" id="pass">		

					</fieldset>		

			    </div>

			</div>


			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="button" value="Enviar" onclick="validar_insertar_modificar2(fInsert.nombre.value, fInsert.apellido1.value, fInsert.apellido2.value, fInsert.telefono.value, fInsert.id_perfil.value, fInsert.id_centro.value, fInsert.dni.value, fInsert.pass.value)" />
					<input class="button right" type="reset" value="Borrar" />
				</div>
			</div>
		  
		</form>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


