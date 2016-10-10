<!--
Realiza un programa que calcule la media de tres notas.
-->

<?php 
    
    $notaUno = $_GET['notaUno'];
    $notaDos = $_GET['notaDos'];
    $notaTres = $_GET['notaTres'];
    $media = ($notaUno+$notaDos+$notaTres)/3;
    echo "La media de las tres notas es: $media";
    ?>

