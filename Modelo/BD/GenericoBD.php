<?php


class GenericoBD
{
    protected static function conectar()
    {
            $conexion = mysql_connect("localhost","root","");

            mysql_select_db("himevico",$conexion);

            return $conexion;
    }

    protected static function desconectar($conexion)
    {
            mysql_close($conexion);
    }

    protected static function convertir_array($rs,$clase)
    {
        $result;
            $x = 0;
        switch ($clase)
        {
            case "rol":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new rol($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
                            
            case "perfil":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new perfil($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
                            
            case "trabajador":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new trabajador($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }



        }
            return $result;
    } 
}
?>
