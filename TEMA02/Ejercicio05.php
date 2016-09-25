<!DOCTYPE html>
<!--
Escribe un programa que calcule el área de un rectángulo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $base = $_GET['base'];
            $altura = $_GET['altura'];
            echo "El área del rectángulo es: ", round($base*$altura, 2), "cm<sup>2</sup>";
        ?>
    </body>
</html>

