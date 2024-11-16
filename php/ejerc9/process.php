<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $edad = intval($_POST['edad']);

    echo "<h1>Resultado</h1>";
    echo "<p>Nombre: $nombre</p>";

    if ($edad >= 18) {
        echo "<p>Es mayor de edad.</p>";
    } else {
        echo "<p>No es mayor de edad.</p>";
    }
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
