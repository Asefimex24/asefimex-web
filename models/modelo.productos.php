<?php
Class Modelo_productos{

    static public function get_Productos(){
        //prepara la consulta
        $sql = Conexion::conectar()->prepare("SELECT *FROM productos WHERE estado=1 order by id_producto ASC");

        //ejecuta la consulta
        $sql->execute();

        //retorna el array con  la informacion
        return $sql->fetchAll();
        //$sql->close();
        $sql = null;
    }

}