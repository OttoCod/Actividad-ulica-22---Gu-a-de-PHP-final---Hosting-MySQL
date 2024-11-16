<?php
function verificar_claves($clave1, $clave2) {
    if ($clave1 !== $clave2) {
        return "Las claves no coinciden.";
    } else {
        return "Las claves coinciden.";
    }
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usuario = htmlspecialchars($_POST['usuario']);
    $clave1 = htmlspecialchars($_POST['clave1']);
    $clave2 = htmlspecialchars($_POST['clave2']);

    $resultado = verificar_claves($clave1, $clave2);

    echo "<h1>Resultado</h1>";
    echo "<p>Usuario: $usuario</p>";
    echo "<p>$resultado</p>";
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
