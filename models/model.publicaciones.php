<?php
require_once("conexion.php");
class Model_publicaciones
{
    static public function get_publicaciones()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM publicaciones WHERE estado=1 order by fecha_inicio desc");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }

    static public function get_publicacion($id_pub)
    {
        $sql = Conexion::conectar()->prepare("SELECT *FROM publicaciones where id=$id_pub");
        $sql->execute();
        return $sql->fetch();
        $sql = null;
    }
}
