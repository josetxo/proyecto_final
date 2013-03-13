<?php include ('plantilla/cabecera.php'); ?>

  <div class="row">

  
    <div class="eight columns centered">

      <h3>Inicia sesión</h3>
      

      <dl class="contained tabs">
        <dd class="active"><a href="#loginForm">Login</a></dd>       
      </dl>

      <ul class="tabs-content contained">
        <li id="loginFormTab" class="active">
		<form name="fLogin" action="validarlogin.php" method="POST">
			<div class="row collapse">
				<div class="three columns"><label class="inline">DNI</label></div>
				<div class="nine columns"><input type="text" name="dni" id="dni" placeholder="DNI De Trabajador" />
			</div>
			<div class="row collapse">
			<div class="three columns"><label class="inline">Contraseña</label></div>
			<div class="nine columns"><input type="password" name="pass" placeholder="contraseña" />
			</div>		
			<input type="button" class="radius button" value="Acceder" onclick="validar_login(fLogin.dni.value,fLogin.pass.value)" />	
		</form>
		<?php
			if($_GET['resp'] == 1)
			{
				echo "<b style='color:red;'>Error. Usuario o contrase&ntilde;a incorrecto</b>";
			}
		?>
        </li>        
      </ul>
    </div>  
  </div>

<?php include ('plantilla/pie.php'); ?>
