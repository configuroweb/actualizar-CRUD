<?php

include_once('conexion.php');
//actualizar registros

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$id = $_POST['id'];

$sql = "UPDATE usuarios SET nombre = '$nombre' , apellido = '$apellido' WHERE id = '$id'";

if (
    $conexion->query($sql) === TRUE
) {
    echo "Registro actualizado correctamente";
} else {

    $conexion->error;
};

$conexion->close();
