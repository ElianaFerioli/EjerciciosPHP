<!DOCTYPE html>
<!--
Escribe un programa que sume, reste, multiplique y divida dos números introducidos por teclado.
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
            echo "La suma de $numUno y $numDos es: ", $numDos+$numUno, "<br>";
            echo "La resta de $numUno y $numDos es: ", $numUno-$numDos, "<br>";
            echo "La multiplicación de $numUno y $numDos es: ", $numDos*$numUno, "<br>";
            echo "La división de $numUno y $numDos es: ", round($numUno/$numDos, 2), "<br>";
        ?>
    </body>
</html>

