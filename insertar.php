<?php
include_once('conexion.php');

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];


$sql = "INSERT INTO usuarios (nombre,apellido)
VALUES ('$nombre','$apellido')";


if ($conexion->query($sql) === TRUE) {

    echo 'Registro Ingresado Correctamente';
} else {

    echo $conexion->error;
}


$conexion->close();

header('Location:listar.php');
