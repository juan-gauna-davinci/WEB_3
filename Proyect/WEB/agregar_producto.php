<?php

require_once('_autoload.php');
require_once('models/Cnx.php');
require_once('models/Categoria.php');
require_once('models/Producto.php');
require_once('helpers/helper_input.php');


try{
    $cnx = new Cnx();
}catch(PDOException $e){
    echo 'Error';
    exit;
}

$producto = new Producto();

$errores = array();

if($_SERVER['REQUEST_METHOD'] == 'POST')
{

    $producto->nombre = test_input( $_POST['nombre'] ?? null );
    $producto->descripcion =  test_input( $_POST['descripcion'] ?? null ) ;
    $producto->precio = test_input( $_POST['precio'] ?? null );
    $producto->cantidad = test_input( $_POST['cantidad'] ?? null );

    $errores = $producto->save($cnx);

    if( !$errores )
    {
        header('Location: producto.php?msj=add');
    }    

}

$action = 'agregar_producto.php';
$categorias = Categoria::all($cnx);

require_once('views/guardar_producto.php');

unset($cnx);

?>