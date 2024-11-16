<?php
// ejercicio7.php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 7 - Número a Texto</title>
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
    <h1>Ejercicio 7 - Número a Texto</h1>
    
    <div class="resultado">
        <?php
        $numeroAleatorio = rand(1, 3);
        echo "Número generado: $numeroAleatorio<br>";
        
        if ($numeroAleatorio == 1) {
            echo "uno";
        } elseif ($numeroAleatorio == 2) {
            echo "dos";
        } else {
            echo "tres";
        }
        ?>
    </div>
</body>
</html>