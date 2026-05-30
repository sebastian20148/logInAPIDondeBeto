<?php

require 'conexion.php';

$datos = json_decode(file_get_contents("php://input"), true);

$usuario = $datos["usuario"];
$password = $datos["password"];

$usuarios->insertOne([
    "usuario" => $usuario,
    "password" => $password
]);

echo json_encode([
    "mensaje" => "Usuario registrado correctamente"
]);

?>