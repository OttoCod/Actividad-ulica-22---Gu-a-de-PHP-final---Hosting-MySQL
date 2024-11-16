<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $estudios = htmlspecialchars($_POST['estudios']);

    echo "<h1>Resultado</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Nivel de estudios: $estudios</p>";
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
