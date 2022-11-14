<?php

require_once('_autoload.php');
require_once('models/Cnx.php');
require_once('models/Usuario.php');
require_once('helpers/helper_input.php');



try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Error';
    exit;
}


require_once('views/_register.php');

unset($cnx);