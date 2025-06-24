<?php
class Control_Hero
{
    static public function Ctr_getHeros()
    {
        $heros = Model_hero::get_Heros();
        return $heros;
    }
}
