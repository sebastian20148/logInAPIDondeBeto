<?php

require 'conexion.php';

$listaUsuarios = $usuarios->find();

$resultado = [];

foreach ($listaUsuarios as $usuario) {

    $resultado[] = [
        "usuario" => $usuario["usuario"]
    ];

}

echo json_encode(
    $resultado,
    JSON_UNESCAPED_UNICODE
);

?>