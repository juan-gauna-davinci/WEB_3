<?php

require_once('_autoload.php');
require_once('models/Cnx.php');
require_once('models/Producto.php');
require_once('helpers/helper_paginador.php');


try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Error';
    exit;
}

$msj = $_GET['msj'] ?? null;
$pag = $_GET['pag'] ?? 1;
$registros_por_pagina = 5;

if($msj == 'add'){
    $msj = 'El producto se ha agregado correctamente.';
}else if($msj == 'update'){
    $msj = 'El producto se ha modificado correctamente.';
}else if($msj == 'delete'){
    $msj = 'El producto se ha eliminado correctamente.';
}

$cantidad_registros = Producto::countAll($cnx);
$productos = Producto::paginate($cnx, $pag, $registros_por_pagina);
$paginas = paginador($pag, $cantidad_registros, $registros_por_pagina);

require_once('views/lista_productos.php');

?>