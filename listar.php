<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar</title>
</head>

<body>



    <?php
    include_once('header.php');
    include_once('conexion.php');

    echo '<pre>';
    $sql = "SELECT id,nombre,apellido FROM usuarios";
    $resultado = $conexion->query($sql);


    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo $fila['id'] . " " . $fila['nombre'] . " " . $fila['apellido'] . "<hr>";
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }

    ?>



</body>

</html>