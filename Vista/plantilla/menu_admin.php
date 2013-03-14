  <div class="row"> 	
	<!-- Nav Sidebar -->    
    <div class="twelve columns">
        
		<ul class="nav-bar">
			<li class="active"><a href="administrar_administrador.php">Administrar</a></li>
			<li class="has-flyout">
				<a href="administrar.php">Trabajadores</a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="insertar_trabajador.php">Insertar Trabajador</a></li>
					<li><a href="modificar_trabajador.php">Modificar Trabajador</a></li>
					<li><a href="eliminar_trabajador.php">Borrar Trabajador</a></li>					
				</ul>
			</li>

			<li style="float:right;"><a href="#">Salir</a></li>	
			<div style="float:right;width:100px;height:40px;text-align:center;color:#fff;font-weight: bold;"><div style="width:100px;height:40px;vertical-align: middle;display:table-cell;">Hola <?php echo $_SESSION['username']; ?></div></div>	
		</ul>        
    </div>
  </div>