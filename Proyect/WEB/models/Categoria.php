<?php

require_once('ModeloPadre.php');

class Categoria extends ModeloPadre
{

    public function __construct()
    {
        parent::__construct(array(
            'id' => null,
            'nombre' => null
        ));
    }

    public static function all(Cnx $cnx)
    {
        $consulta = $cnx->prepare('
            SELECT id, nombre 
            FROM categorias
            ORDER BY nombre
        ');
        $consulta->execute();
        $consulta->setFetchMode(PDO::FETCH_CLASS|PDO::FETCH_PROPS_LATE, 'producto');
        return $consulta->fetchAll();
    }

}