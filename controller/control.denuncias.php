<?php
class Control_Denuncias
{

    public static function ctr_getDenuncias()
    {
        $denuncias = Modelo_Denuncias::get_Denuncias();
        return $denuncias;
    }
}
