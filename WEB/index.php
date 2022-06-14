<?php

require_once('_autoload.php');

if(!Auth::validate())
{
    header('Location: login.php');
}

$nombre = Auth::getNombre();

require_once('views/_dashboard.php');

?>