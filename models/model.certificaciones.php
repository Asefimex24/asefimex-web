<?php
require_once("conexion.php");
class Model_certificaciones
{
    static public function get_certificaciones()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM certificaciones WHERE estado=1 order by fecha_inicio");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }

    static public function get_Certificacion($idcert)
    {

        $sql = Conexion::conectar()->prepare("SELECT *FROM certificaciones WHERE id=$idcert");
        $sql->execute();
        return $sql->fetch();
        $sql = null;
    }
}
