<?php
require_once('Modelo/base/paquete_base.php');

class Vista
{
	public static function mostrarListadoAlumnos($alumnos)
	{?>
			<div class="twelve columns">
				<h3>Administrar alumnos</h3>
			</div>
			<div class="twelve columns">
				<table class="twelve">
		  		<thead>
					<tr>
			  			<th>Nombre</th>
			  			<th>Apellido 1</th>
			  			<th>Apellido 2</th>
			  			<th>Acción</th>
					</tr>
		  		</thead>
		  		<tbody>
	   <?php
		$x=0;
		foreach ($alumnos as $alumno)
		{?>
			<tr>
			  <td><?php echo $alumno->getNombre(); ?></td>
			  <td><?php echo $alumno->getApellido1(); ?></td>
			  <td><?php echo $alumno->getApellido2(); ?></td>
			  <td><a class="tiny button" href="insertar_alumno.php">Modificar</a><a class="tiny button" href="">Borrar</a></td>
			</tr>
		<?php
		}?>
	    	</tbody>
		</table>
	</div>
	<?php
  	}
  	
  	public static function mostrarPaginacion($pag,$pagina,$paginas)
  	{?>
  	<div class="twelve columns">
	<ul class="pagination">
  
  	<?php
  	if ($pagina == 1)
  	{
  		$ruta="#";
  		?>
  		<li class="arrow unavailable">
  		<?php
  	}
  	else
  	{
  		$ruta=$pag."?pag=".($pagina-1);
  		?>
  		<li class="arrow">
  		<?php
  	}
  	?>
  	<a href="<?php echo $ruta; ?>">&laquo;</a></li>
  	<?php
  	for($x=1;$x<=$paginas;$x++)
  	{
  		$ruta=$pag."?pag=".$x;
  		if ($x == $pagina)
  		{?>
  			<li class="current">
  		<?php
  		}
  		else
  		{?>
  			<li>
  		<?php
  		}
  		?>
  		<a href="<?php echo $ruta; ?>"><?php echo $x; ?></a></li>
  		<?php
  	}
  
  	if ($pagina == $paginas)
  	{
  		$ruta="#";
  		?>
  		<li class="arrow unavailable">
  	<?php
  	}
  	else
  	{
  		$ruta=$pag."?pag=".($pagina+1);
  		?>
  		<li class="arrow">
  		<?php
  	}
  	?>
  	<a href="<?php echo $ruta; ?>">&raquo;</a></li>
	</ul>
	</div>
	<?php
  	}
}
?>