<?php
require_once 'Controlador/controlador.php';
require_once 'Modelo/BD/sesion.php';
$sesion=new sesion();
$dni=$_POST['dni'];
$pass=$_POST['pass'];

$valido= controlador::comprobarUsuario($dni,$pass);

if($valido){
    switch ($sesion->get("perfil")) {
        case 0:
            header("location:administrar_".$sesion->get("per").".php");
            break;
        case 1:
            header("location:administrar_".$sesion->get("per").".php");
            break;
        case 2:
            header("location:administrar_".$sesion->get("per").".php");
            break;
        case 3:
            header("location:administrar_".$sesion->get("per").".php");
            break;

        default:
            header("location:inde.php");
            break;
    }
}else{
    header("location:inde.php");
}

?>
