  <div class="row"> 	
	<!-- Nav Sidebar -->    
    <div class="twelve columns">
        
		<ul class="nav-bar">

			<li class="active"><a href="administrar_trabajador.php">Administrar</a></li>
			<li class="has-flyout">
				<a href="administrar_trabajador.php">Ausencias</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="insertar_ausencia.php">Insertar Ausencia</a></li>
					<li><a href="modificar_ausencia.php">Modificar Ausencia</a></li>
					<li><a href="eliminar_ausencia.php">Borrar Ausencia</a></li>					
				</ul>
			</li>

			<li class="has-flyout">
				<a href="listado_ausencias_trabajador.php">Listado</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="insertar_ausencia.php">Listado Ausencias</a></li>					
				</ul>
			</li>

			<li style="float:right;"><a href="#">Salir</a></li>	
			<div style="float:right;width:100px;height:40px;text-align:center;color:#fff;font-weight: bold;"><div style="width:100px;height:40px;vertical-align: middle;display:table-cell;">Hola <?php echo $_SESSION['username']; ?></div></div>	
		</ul>        
    </div>
  </div>