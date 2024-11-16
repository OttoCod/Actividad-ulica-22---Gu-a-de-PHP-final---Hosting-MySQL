<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $deportes = isset($_POST['deportes']) ? $_POST['deportes'] : [];

    echo "<h1>Resultado</h1>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Cantidad de deportes que practica: " . count($deportes) . "</p>";

    if (count($deportes) > 0) {
        echo "<p>Deportes seleccionados: " . implode(", ", $deportes) . "</p>";
    } else {
        echo "<p>No seleccionó ningún deporte.</p>";
    }
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
