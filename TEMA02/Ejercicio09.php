<!DOCTYPE html>
<!--
Escribe un programa que calcule el volumen de un cono mediante la fórmula V = 13 πr 2 h.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $radio= $_GET['radio'];
            $altura= $_GET['altura'];
            $volumen = (pi()*pow($radio, 2)*$altura)/3;
            echo "El volumen del cono es: ", round($volumen, 2), "cm<sup>3</sup>";
        ?>
    </body>
</html>

