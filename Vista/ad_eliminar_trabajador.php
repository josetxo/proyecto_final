<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>
<?php include ('../Controlador/controlador.php'); ?>
<?php
//recupero valor
$dni=$_POST['dni'];

//creo el trabajador
$trabajador= controlador::recuperar_trabajador($dni);
if($trabajador==TRUE){
    $eliminado=  controlador::elimina_trabajador($trabajador);
}
//inserto el trabajador

?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
                    <?php
                    if($trabajador){
                        if($eliminado){
                        ?>
                            <h3>Trabajador eliminado</h3>
                            <?php
                        }else{
                            ?>
                            <h3>No eliminado</h3>
                            <?php
                        }
                    }else{
                        echo "<h3>el trabajador no existe<h3>";
                    }
                        ?>
		</div>	
	</div>
	<div class="row">
		
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>