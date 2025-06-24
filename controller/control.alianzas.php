<?php

class Control_alianzas
{
    static public function Ctr_getAlianzas()
    {
        $alianzas = Model_alianzas::get_alianzas();
        return $alianzas;
    }

    static public function Ctr_getAlianza($idali)
    {
        $alianza = Model_alianzas::get_alianza($idali);
        return $alianza;
    }
}
