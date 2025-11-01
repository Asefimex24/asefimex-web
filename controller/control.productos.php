<?php
Class Control_productos{

    public static function ctr_getProductos(){
        $productos = Modelo_productos::get_Productos();
        return $productos;
    }

}   