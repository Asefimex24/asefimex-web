<?php
class Control_directivos
{
    static public function Ctr_getDirectivos()
    {
        $directorio = Model_directivos::get_directivos();
        return $directorio;
    }
}
