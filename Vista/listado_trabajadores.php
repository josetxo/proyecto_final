<?php
session_start();

include('plantilla/cabecera.php'); ?>
<?php include ('plantilla/menu_jefe.php'); ?>

  <!-- Contenido -->

	<div class="row">
		<div class="twelve columns">
			<h2>Listado de trabajadores</h2>
		</div>
	  <div class="twelve columns">
			<?php
				$listadoAusencias = Controlador::ListadoTrabajadoresAusencias();
			?>
			
			<table border="0">
				<tr>
					<td>Nombre</td>
					<td>Apellido</td>
					<td>DNI</td>
					<td>Perfil</td>
					<td>fecha inicio ausencia</td>
					<td>fecha fin ausencia</td>
					<td>valorado</td>
					<td>aceptar/rechazar ausencias</td>
				</tr>
				<?php
					for($x=0;$x<$listadoAusencias.length;$x++)
					{
						echo "<tr>";
							echo "<td>".$listadoAusencias[$x]->getTrabajador()->getNombre()."</td>";
							echo "<td>".$listadoAusencias[$x]->getTrabajador()->getApellido1()."</td>";
							echo "<td>".$listadoAusencias[$x]->getTrabajador()->getDni()."</td>";
							echo "<td>".$listadoAusencias[$x]->getTrabajador()->getPerfil()->getNombre()."</td>";
							echo "<td>".$listadoAusencias[$x]->getFecha_inicio()->."</td>";
							echo "<td>".$listadoAusencias[$x]->getFecha_fin()."</td>";
							$_SESSION['ausencia'] = serialize($listadoAusencias[$x]);
							
							echo "<td><a href='respuestaausencias.php?resp=aceptado'>Aceptar</a> || <a href='respuestaausencias.php?resp=rechazado'>Rechazar</a></td>";
						echo "</tr>";
					}
				?>
			</table>
	  </div>
	</div>
  <!-- Fin del contenido -->

<?php include('plantilla/pie.php'); ?>