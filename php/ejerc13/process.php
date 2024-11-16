<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $contrato = htmlspecialchars($_POST['contrato']);

    echo "<h1>Contrato Modificado</h1>";
    echo "<pre>$contrato</pre>";
} else {
    echo "<p>Acceso no permitido.</p>";
}
?>
