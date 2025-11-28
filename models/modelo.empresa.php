<?php
Class Modelo_Empresa
{
    static public function get_Empresas()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM empresas WHERE estado=1 order by nombre");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }
}