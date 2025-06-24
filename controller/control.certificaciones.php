<?php

class Control_Certificacion
{
    static public function Ctr_getCertificaciones()
    {
        $certificaciones = Model_certificaciones::get_certificaciones();
        return $certificaciones;
    }

    static public function Ctr_getCertificacion($idcert)
    {
        $certificacion = Model_certificaciones::get_Certificacion($idcert);
        return $certificacion;
    }
}
