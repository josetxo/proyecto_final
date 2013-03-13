  <div class="row"> 	
	<!-- Nav Sidebar -->    
    <div class="twelve columns">
        
		<ul class="nav-bar">
			<li class="active"><a href="administrar_jefe..php">Administrar</a></li>
			<li class="has-flyout">
				<a href="administrar_jefe.php">Listados </a>
				<a href="#" class="flyout-toggle"><span> </span></a>
				<ul class="flyout">
					<li><a href="listado_trabajadores.php">Listado Trabajadores Con Sus Ausencias</a></li>	
					<li><a href="listado_ausencias.php">Listado Ausencias Con Su Trabajador</a></li>			
				</ul>
			</li>

			<li style="float:right;"><a href="#">Salir</a></li>	
			<div style="float:right;width:100px;height:40px;text-align:center;color:#fff;font-weight: bold;"><div style="width:100px;height:40px;vertical-align: middle;display:table-cell;">Hola <?php echo $_SESSION['username']; ?></div></div>	
		</ul>        
    </div>
  </div>