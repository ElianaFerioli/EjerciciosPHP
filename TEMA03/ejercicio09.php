<!--
Realiza un programa que resuelva una ecuación de segundo grado (del tipo ax 2 + bx + c = 0).
-->

<?php 
    
    $valorA = $_GET['valorA'];
    $valorB = -$_GET['valorB'];
    $valorC = $_GET['valorC'];
    $xUno = ($valorB + (sqrt((pow(8, 2))-(4*$valorA*$valorC))))/2*$valorA;
    $xDos = ($valorB - (sqrt((pow(8, 2))-(4*$valorA*$valorC))))/2*$valorA;
    echo "El valor de X1 es $xUno y el valor de X2 es $xDos."
    ?>


