<?php
// ejercicio8.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 8 - Tabla del 2</title>
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
    <h1>Ejercicio 8 - Tabla del 2</h1>
    
    <div class="resultado">
        <h2>Usando for:</h2>
        <?php
        for ($i = 1; $i <= 10; $i++) {
            echo "2 x $i = " . (2 * $i) . "<br>";
        }
        ?>

        <h2>Usando while:</h2>
        <?php
        $i = 1;
        while ($i <= 10) {
            echo "2 x $i = " . (2 * $i) . "<br>";
            $i++;
        }
        ?>

        <h2>Usando do/while:</h2>
        <?php
        $i = 1;
        do {
            echo "2 x $i = " . (2 * $i) . "<br>";
            $i++;
        } while ($i <= 10);
        ?>
    </div>
</body>
</html>