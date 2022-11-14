<?php

    require_once('conf/conf.php');
    require_once('modelos/Cnx.php');
    require_once('modelos/Usuario.php');

    try{
        $cnx = new Cnx();
    }catch(PDOException $e){
        echo 'Error';
        exit;
    }

    $usuario = new Usuario();
    $usuario->nombre = 'Fernando';
    $usuario->email = 'fernando.gaitan@davinci.edu.ar';
    $usuario->hashContrasena('1234');

$usuario->save($cnx);

    unset($cnx);

?>