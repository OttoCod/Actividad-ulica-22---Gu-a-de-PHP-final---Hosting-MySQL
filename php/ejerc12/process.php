<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $ingresos = intval($_POST['ingresos']);

    echo "<h1>Resultado</h1>";
    echo "<p>Nombre: $nombre</p>";

    if ($ingresos > 3000) {
        echo "<p>Debe pagar impuestos a las ganancias.</p>";
    } else {
        echo "<p>No debe pagar impuestos a las ganancias.</p>";
    }
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
