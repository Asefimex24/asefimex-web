<?php

date_default_timezone_set('America/Mexico_City');

require_once("controller/control.plantilla.php");

require_once("models/model.hero.php");
require_once("controller/control.hero.php");

require_once("models/model.publicaciones.php");
require_once("controller/control.publicaciones.php");

require_once("models/model.directorio.php");
require_once("controller/control.directorio.php");

require_once("models/model.testimonios.php");
require_once("controller/control.testimonios.php");


require_once("models/model.directivos.php");
require_once("controller/control.directivos.php");

require_once("get_env.php");

$plantilla = new Control_Plantilla();

$plantilla->get_Plantilla();
