<?php
class Control_testimonio
{
    static public function Ctr_getTestimonios()
    {
        $testimonios = Model_Testimonio::get_testimonios();
        return $testimonios;
    }
}
