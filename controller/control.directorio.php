<?php
class Control_directorio
{
    static public function Ctr_getDirectorio()
    {
        $directorio = Model_directorio::get_directorio();
        return $directorio;
    }
}
