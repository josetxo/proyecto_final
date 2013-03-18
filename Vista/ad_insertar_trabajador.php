<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>
<?php include ('../Controlador/controlador.php'); ?>
<?php
//recupero valores
$nombre=$_POST['nombre'];
$apellido1=$_POST['apellido1'];
$apellido2=$_POST['apellido2'];
$telefono=$_POST['telefono'];
$id_perfil=$_POST['id_perfil'];
$id_centro=$_POST['id_centro'];
$dni=$_POST['dni'];
$pass=$_POST['pass'];
//creo el trabajador
$trabajador= new trabajador();
$trabajador->setNombre($nombre);
$trabajador->setApellido1($apellido1);
$trabajador->setApellido2($apellido2);
$trabajador->setTelefono($telefono);
$trabajador->setPerfil($id_perfil);
$trabajador->setCentro($id_centro);
$trabajador->setDni($dni);
$trabajador->setPass($pass);
//inserto el trabajador
$insertado=  controlador::inserta_trabajador($trabajador);
?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
                    <?php
                    if($insertado){
                    ?>
			<h3>Trabajador insertado</h3>
                        <?php
                    }else{
                        ?>
                        <h3>No insertado</h3>
                        <?php
                    }
                        ?>
		</div>	
	</div>
	<div class="row">
		
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


