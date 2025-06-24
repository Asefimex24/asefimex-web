<?php
class Model_directivos
{
    static public function get_directivos()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT a.nombre as nombre,a.foto as foto, a.fa as facebook, a.tw as tiwtter, 
        a.lk as linkedin, b.cargo as cargo FROM directivos a, cargos b WHERE a.id_cargo=b.id_cargo AND a.estado=1 
        order by a.id_cargo");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }
}
