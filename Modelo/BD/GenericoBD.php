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
                            
            case "empresa":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new empresa($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
							
            case "centro":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new centro($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
            case "ausencia_general":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new ausencia_general($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
            case "ausencia_individual":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new ausencia_individual($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }
            case "tipo_ausencia":
                while ($fila = mysql_fetch_assoc($rs))
                            {
                                    $objeto = new tipo_ausencia($fila);
                                    $result[$x] = $objeto;
                                    $x++;
                            }



        }
            return $result;
    } 
}
?>
