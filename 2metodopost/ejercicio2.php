<?php
if ($_POST) {
    // recibir informaci{on del formulario HTML metodo POST
    $nombre = $_POST['txtNombre'];
    echo "Hola " . $nombre;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Envios Post</title>
</head>

<body>
    <!-- Hola Mundo -->
    <form action="ejercicio2.php" method="POST">
        <label for="txtNombre">Nombre: </label>
        <input type="text" name="txtNombre" id="txtNombre">

        <input type="submit" value="Enviar">
    </form>
</body>

</html>