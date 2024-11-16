<?php
// ejercicio6.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 6 - Variables en String</title>
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
    <h1>Ejercicio 6 - Variables en String</h1>
    
    <div class="resultado">
        <?php
        // Definición de variables enteras
        $var1 = 5;
        $var2 = 10;
        $var3 = 15;

        // String que incorpora las variables
        $mensaje = "Las tres variables son: $var1, $var2 y $var3";
        echo $mensaje;
        ?>
    </div>
</body>
</html>