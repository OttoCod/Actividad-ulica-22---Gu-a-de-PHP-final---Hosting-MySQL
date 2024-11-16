<?php
$pedidos_txt = "pedidos.txt";

if (file_exists($pedidos_txt)) {
    $pedidos = file_get_contents($pedidos_txt);
    echo "<h1>Pedidos Realizados</h1>";
    echo "<pre>$pedidos</pre>";
} else {
    echo "<p>No se encontraron pedidos.</p>";
}
?>
