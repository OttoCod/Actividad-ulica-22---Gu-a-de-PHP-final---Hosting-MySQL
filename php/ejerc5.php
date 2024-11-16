<?php
// ejercicio5.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Tipos de Variables</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
            line-height: 1.6;
        }
        .resultado {
            padding: 15px;
            margin: 20px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
    </style>
</head>
<body>
    <h1>Ejercicio 5 - Tipos de Variables</h1>
    
    <div class="resultado">
        <?php
        // Definición de variables de diferentes tipos
        $entero = 42;
        $double = 3.14159;
        $string = "Hola Mundo";
        $boolean = true;

        // Impresión de variables
        echo "Integer: $entero<br>";
        echo "Double: $double<br>";
        echo "String: $string<br>";
        echo "Boolean: " . ($boolean ? 'true' : 'false') . "<br>";
        ?>
    </div>
</body>
</html>