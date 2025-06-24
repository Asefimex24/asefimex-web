<?php

class Conexion
{

    static public function conectar()
    {
        date_default_timezone_set('America/Mexico_City');

        $link = new PDO("mysql:host=127.0.0.1;dbname=asefimex_web", "root", "");

        $link->exec("set names utf8mb4");

        return $link;
    }

    static public function conectar_2()
    {
        date_default_timezone_set('America/Mexico_City');

        $link = new PDO("mysql:host=127.0.0.1;dbname=asefimex_op", "root", "");

        $link->exec("set names utf8mb4");

        return $link;
    }
}
