<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    include_once('header.php');
    include_once('conexion.php');


    $sql = "SELECT id,nombre,apellido FROM usuarios";
    $resultado = $conexion->query($sql);

    echo '<pre>';

    if ($resultado->num_rows > 0) {
        while ($fila = $resultado->fetch_assoc()) {
            echo "<form action='actualizarRegistro.php' method='post'><input type='text' readonly name='id' value='" . $fila['id'] . " '>" .

                "<input type='text' name='nombre' value='" . $fila['nombre'] . "'>" .

                "<input type='text' name='apellido' value='" . $fila['apellido'] . "'>"

                . "<button>Enviar</button></form><hr>";
        }
    } else {
        echo "Sin registros encontrados en la base de datos";
    }



    ?>




    </pre>

</body>

</html>