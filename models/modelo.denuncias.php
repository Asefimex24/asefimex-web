<?php
include_once("conexion.php");
class Modelo_Denuncias
{

    public static function get_Denuncias()
    {
        $sql = Conexion::conectar()->prepare("select *from denuncias where estado=1 order by id");
        $sql->execute();
        return $sql->fetchAll();
    }
}
