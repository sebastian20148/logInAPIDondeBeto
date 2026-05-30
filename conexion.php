<?php

require 'vendor/autoload.php';

try {

    $cliente = new MongoDB\Client("mongodb://localhost:27017");

    $db = $cliente->api_login;

    $usuarios = $db->usuarios;

    echo "Conexion Mongo OK";

} catch (Exception $e) {

    echo $e->getMessage();

}

?>