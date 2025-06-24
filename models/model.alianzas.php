<?php
require_once("conexion.php");
class Model_alianzas
{
    static public function get_alianzas()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM alianzas WHERE estado=1 order by fecha_inicio");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }

    static public function get_alianza($idali)
    {
        $sql = Conexion::conectar()->prepare("SELECT *FROM alianzas WHERE id=$idali");
        $sql->execute();
        return $sql->fetch();
        $sql = null;
    }
}
