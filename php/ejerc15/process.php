<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $nombre = htmlspecialchars($_POST['nombre']);
    $direccion = htmlspecialchars($_POST['direccion']);
    $pizzas = isset($_POST['pizzas']) ? $_POST['pizzas'] : [];
    $pedidos_txt = "pedidos.txt";

    $pedido = "Nombre: $nombre\n";
    $pedido .= "Dirección: $direccion\n";
    $pedido .= "Pizzas solicitadas:\n";

    foreach ($pizzas as $pizza) {
        $cantidad = $_POST['cantidad_' . strtolower(str_replace(' ', '_', $pizza))];
        $pedido .= "$pizza: $cantidad\n";
    }
    $pedido .= "-----------------------------------\n";

    file_put_contents($pedidos_txt, $pedido, FILE_APPEND);

    echo "<h1>Pedido Confirmado</h1>";
    echo "<p>Gracias por tu pedido, $nombre. Te lo enviaremos a la dirección: $direccion</p>";
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
