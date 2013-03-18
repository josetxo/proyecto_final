<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_trabajador.php'); ?>



<!-- Contenido -->





    <div class="row">
        <div class="twelve columns">
            <h3>Administrar Ausencias</h3>
        </div>  
    </div>
    <div class="row">
        <form name="fModificar2">

            <div class="row">
                <div class="five columns centered">

                    <fieldset>
                    <legend>Insertar Datos Ausencia</legend>

                        <label>ID Trabajador</label>
                        <input type="text" name="trabajador_id" id="trabajador_id" readonly="readonly" value="<?php     ?>">


                        <label>Ausencia</label>
                        <select style="width:100px" name="tipo_ausencia_id" id="tipo_ausencia_id">
                            <option>Ausencia 1</option>
                            <option>Ausencia 2</option>
                        </select>

                        <br><br><br>


                        <label>Fecha(s)</label>
                <div id="widget">
                    <div id="widgetField">
                            <span id="texto">Selecciona la(s) fecha(s) deseadas</span>
                            <a href="#">Select date range</a>
                    </div>


                    <div id="widgetCalendar">
                    </div>

                </div>                    


                    </fieldset>

                </div>

            </div>
<br><br><br><br><br><br><br><br><br><br><br><br>

            <div class="row">
                <div class="four columns centered">
                    <input class="button left" type="button" value="Enviar" onclick="validar(); " />
                    <input class="button right" type="reset" value="Borrar" />
                </div>
            </div>
          
        </form>
    </div>


  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php');  ?>  



















