<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    echo "Hola " . $nombre . " " . $apellido; // Union entre elementos con el punto. Comillas simples son un conjunto de caracteres, comillas dobles es un String 
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String y Concatenación</title>
</head>

<body>
    <h1>Formulario</h1>
    <form action="ejercicio4.php" method="POST">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">
        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>