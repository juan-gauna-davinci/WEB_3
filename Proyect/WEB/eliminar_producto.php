<?php

require_once('_autoload.php');
require_once('models/Cnx.php');
require_once('models/Producto.php');
require_once('helpers/helper_input.php');


try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Error';
    exit;
}

$ide = test_input( $_GET['ide'] ?? null );

$producto = Producto::find($cnx, $ide);

//Si existe un producto con ese ID, lo elimina
if($producto){
    $producto->delete($cnx);
}

header('Location: producto.php?msj=delete');