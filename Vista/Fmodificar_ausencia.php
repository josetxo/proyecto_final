<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_trabajador.php'); ?>  

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Administrar Ausencias</h3>
		</div>	
	</div>
	<div class="row">
		<form name="fModificar2Ausencia">

			<div class="row">
			    <div class="five columns centered">

					<fieldset>
					<legend>Insertar Datos Ausencia</legend>

						<label>ID Trabajador</label>
						<input type="text" name="trabajador_id" id="trabajador_id" readonly="readonly" value="<?php     ?>">

						<label>Fecha</label>
						<input type="text" name="fecha" id="fecha">						


						<label>Ausencia</label>
						<select style="width:100px" name="tipo_ausencia_id" id="tipo_ausencia_id">
							<option selected="selected" value="no">Escoge un tipo de ausencia...</option>
							<option>Ausencia 1</option>
							<option>Ausencia 2</option>
						</select>

						<input type="hidden" name="modificar" id="modificar" value="modificar">

				    </fieldset>

			    </div>

			</div>


			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="button" value="Enviar" onclick="validar_insertar_modificar2_ausencia(fModificar2Ausencia.tipo_ausencia_id.value, fModificar2Ausencia.modificar.value)" />
					<input class="button right" type="reset" value="Borrar" />
				</div>
			</div>
		  
		</form>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


