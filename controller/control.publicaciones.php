<?php

class Control_Publicaciones
{
    static public function Ctr_getPublicaciones()
    {
        $publicaciones = Model_publicaciones::get_publicaciones();
        return $publicaciones;
    }

    static public function Ctr_getPublicacion($id_pub)
    {
        $publi = Model_publicaciones::get_publicacion($id_pub);
        return $publi;
    }
}
