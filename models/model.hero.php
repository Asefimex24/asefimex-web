<?php
require_once "conexion.php";
class Model_hero
{
    static public function get_Heros()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM home_hero WHERE estado=1 order by id;");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }
}
