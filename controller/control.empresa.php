<?php
Class Control_Empresa
{

    public static function ctr_getEmpresas()
    {
        $empresas = Modelo_Empresa::get_Empresas();
        return $empresas;
    }
}