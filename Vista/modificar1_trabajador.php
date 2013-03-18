<?php include ('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_admin.php'); ?>
<?php include ('../Controlador/controlador.php'); ?>
<?php
$dni=$_POST['dni'];

$trabajador=  controlador::recuperar_trabajador($dni);

$perfiles =  controlador::recuperarPerfiles();

$centros = controlador::recuperarCentros();

$perfil=$trabajador->getPerfil();

$centro=$trabajador->getCentro();

?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h3>Modificar Trabajadores</h3>
		</div>	
	</div>
	<div class="row">
		<form name="fInsert" action="ad_modificar_trabajador.php" method="POST">

			<div class="row">
			    <div class="five columns">

					<fieldset>
					<legend>Modificar Datos Trabajador</legend>

						<label>Nombre</label>
                                                <input type="text" name="nombre" id="nombre" value="<?php echo $trabajador->getNombre() ?>" >

						<label>Primer apellido</label>
                                                <input type="text" name="apellido1" id="apellido1" value="<?php echo $trabajador->getApellido1() ?>" >
						
						<label>Segundo apellido</label>
                                                <input type="text" name="apellido2" id="apellido2" value="<?php echo $trabajador->getApellido2() ?>" >	

						<label>Telefono</label>
                                                <input type="text" name="telefono" id="telefono" value="<?php echo $trabajador->getTelefono() ?>" >	
                                                
						<label>Perfil </label>
						<select style="width:100px" name="id_perfil" id="id_perfil">
                                                    
							<?php
                                                        
                                                        for($x=0;$x<count($perfiles);$x++){
                                                            if($perfiles[$x]->getId_perfil()==$perfil->getId_perfil()){
                                                            ?>
                                                    
                                                        <option value="<?php echo $perfiles[$x]->getId_perfil(); ?>" selected><?php echo $perfiles[$x]->getNombre(); ?></option>
                                                        
                                                            <?php
                                                            
                                                            }else{
                                                            ?>
                                                                <option value="<?php echo $perfiles[$x]->getId_perfil(); ?>" ><?php echo $perfiles[$x]->getNombre(); ?></option>
                                                        <?php 
                                                        }
                                                        }
                                                        ?>
                                                       
						</select>
                                                

						</br></br>

						<label>Centro</label>
						<select style="width:100px" name="id_centro" id="id_centro">
                                                    
							<?php
                                                        
                                                        for($x=0;$x<count($centros);$x++){
                                                            if($centros[$x]->getId_centro()==$centro->getId_centro()){
                                                            ?>
                                                    <option value="<?php echo $centros[$x]->getId_centro(); ?>" selected><?php echo $centros[$x]->getDescripcion(); ?></option>
                                                        
                                                            <?php }else{ ?>
                                                    <option value="<?php echo $centros[$x]->getId_centro(); ?>" ><?php echo $centros[$x]->getDescripcion(); ?></option>
                                                                <?php 
                                                            }
                                                        }
                                                        ?>
						</select>

				    </fieldset>

			    </div>


			    <div class="five columns">	

					<fieldset>
					<legend>Insertar Datos de Inicio De Sesion</legend>		
							
						<label>DNI</label>
                                                <input type="text" name="dni" id="dni" value="<?php echo $trabajador->getDni() ?>" >

						<label>Contraseña</label>
                                                <input type="password" name="pass" id="pass" value="<?php echo $trabajador->getPass() ?>">		
                                                <input type="hidden" name="id" id="pass" value="<?php echo $trabajador->getId_trabajador() ?>">
                                                
					</fieldset>		

			    </div>

			</div>


			<div class="row">
				<div class="four columns centered">
					<input class="button left" type="submit" value="Enviar" onclick="validar_insertar_modificar2(fInsert.nombre.value, fInsert.apellido1.value, fInsert.apellido2.value, fInsert.telefono.value, fInsert.id_perfil.value, fInsert.id_centro.value, fInsert.dni.value, fInsert.pass.value)" />
					<input class="button right" type="reset" value="Borrar" />
				</div>
			</div>
		  
		</form>
	</div>
  <!-- Fin del contenido -->

<?php include ('plantilla/pie.php'); ?>  


