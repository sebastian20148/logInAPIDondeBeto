<?php

require 'conexion.php';

$datos = json_decode(file_get_contents("php://input"), true);

$usuario = $datos["usuario"];
$password = $datos["password"];

$usuarioEncontrado = $usuarios->findOne([
    "usuario" => $usuario,
    "password" => $password
]);

if ($usuarioEncontrado) {

    echo json_encode([
        "mensaje" => "Autenticacion correcta"
    ]);

} else {

    echo json_encode([
        "mensaje" => "Error en la autenticacion"
    ]);

}

?>