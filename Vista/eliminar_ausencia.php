<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_trabajador.php'); ?>  

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Administrar Ausencias</h3>
		</div>	
	</div>
	<div class="row">
		<div class="eight columns centered">			

			<form name="fBorrarAusencia" method="POST" action="eliminarGlobal.php">
			   <fieldset>
			   <legend>Eliminar Ausencia</legend>
					<div class="row"><br>
						ID de la Ausencia:
						<input type="text" name="id" id="id" size="40px" />						
						<input type="hidden" name="borrar" id="borrar" value="borrar"/> <br><br>
					</div>  	  
		  	  		<div class="row">
		  	  			<div class="six columns centered">
							<input class="button left" type="button" value="Enviar" onclick="validar_borrar_modificar_ausencia(fBorrarAusencia.id.value, fBorrarAusencia.borrar.value)" />
							<input class="button right" type="reset" value="Borrar" />
						</div>
					</div>
			   </fieldset>
			</form>
		</div>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  
