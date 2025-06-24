<?php
include_once("conexion.php");
class Model_Testimonio
{
    static public function get_testimonios()
    {
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT nombre, ocupacion, contenido, imagen, fecha
         FROM testimonios WHERE estado=1 
         order by id");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }
}
