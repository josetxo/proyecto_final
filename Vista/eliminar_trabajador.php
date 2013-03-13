<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>  

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Administrar Trabajadores</h3>
		</div>	
	</div>
	<div class="row">
		<div class="eight columns centered">			

			<form name="fBorrar" method="POST" action="eliminar.php">
			  <fieldset>
			  <legend>Eliminar Trabajador</legend>
					<div class="row"><br>
						DNI del Trabajador:
						<input type="text" name="dni" id="dni" size="40px" />						
						<input type="hidden" name="borrar" id="borrar" value="borrar"/> <br><br>
					</div>  	  
		  	  		<div class="row">
		  	  			<div class="six columns centered">
							<input class="button left" type="button" value="Enviar" onclick="validar_borrar_modificar(fBorrar.dni.value, fBorrar.borrar.value)" />
							<input class="button right" type="reset" value="Borrar" />
						</div>
					</div>
			  </fieldset>
			</form>
		</div>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  
