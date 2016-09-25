<!DOCTYPE html>
<!--
Realiza un programa que pida dos números y luego muestre el resultado de su multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $numUno = $_GET['numUno'];
            $numDos = $_GET['numDos'];
            echo "La multiplicación de $numUno y $numDos es: ", $numDos*$numUno;
        ?>
    </body>
</html>

