<!--
Realiza un programa que calcule el tiempo que tardará en caer un objeto desde una altura h .
-->

<?php 
    
    $altura = $_GET['altura'];
    $tiempo = 0;
    $g = 9.81;
    $tiempo = sqrt((2*$altura)/$g);
    echo "El tiempo que tarda en caer el objeto es: $tiempo segundos";
    ?>

