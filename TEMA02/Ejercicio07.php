<!DOCTYPE html>
<!--
Escribe un programa que calcule el total de una factura a partir de la base imponible.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $baseImponible = $_GET['baseImponible'];
            $total = (($baseImponible*21)/100) + $baseImponible;
            echo "El total de la factura de luz es: ", $total, " euros.";
        ?>
    </body>
</html>

