<?php
require_once('Controlador/controlador.php');
require_once('Modelo/base/paquete_base.php');
require_once('Vista/vista.php');

  if (isset($_REQUEST['pag']))
  {
  $pagina = $_REQUEST['pag'];
  }
  else
  {
  $pagina = 1;
  }
  
  $cuantos=10;
  
  $total_reg = Controlador::obtenerTotalAlumnos();
  $paginas = Controlador::obtenerTotalPaginas($total_reg,$cuantos);
  $alumnos = Controlador::obtenerAlumnos($pagina,$cuantos);
  
  if ($alumnos)
  {
     Vista::mostrarListadoAlumnos($alumnos);
     Vista::mostrarPaginacion("alumnos.php",$pagina,$paginas);
  }
?>