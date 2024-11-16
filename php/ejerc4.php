<?php
// ejercicio4.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Número Aleatorio</title>
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
    <h1>Ejercicio 4 - Número Aleatorio</h1>
    
    <div class="resultado">
        <?php
        $num = rand(1, 100);
        echo "El número generado es: $num<br>";
        if ($num <= 50) {
            echo "El número es menor o igual a 50";
        } else {
            echo "El número es mayor a 50";
        }
        ?>
    </div>
</body>
</html>