<!DOCTYPE html>
<!--
Escribe un programa que utilice las variables $x y $y . Asignales los valores 144 y 999 respectiva-
mente. A continuación, muestra por pantalla el valor de cada variable, la suma, la resta, la división
y la multiplicación.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $x = 144;
            $y = 999;
            echo "<strong>", 'Suma: ', "</strong>", $x+$y;
            echo "<br>";
            echo "<strong>", 'Resta: ', "</strong>", $x-$y;
            echo "<br>";
            echo "<strong>", 'División: ', "</strong>", round($x/$y, 2);
            echo "<br>";
            echo "<strong>", 'Multiplicación: ', "</strong>", $x*$y;
        ?>
    </body>
</html>


