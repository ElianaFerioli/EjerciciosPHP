<!--
Realiza un programa que calcule la media de tres notas.
-->

<?php 
    
    $notaUno = $_GET['notaUno'];
    $notaDos = $_GET['notaDos'];
    $notaTres = $_GET['notaTres'];
    $media = ($notaUno+$notaDos+$notaTres)/3;
    $mensaje = "";
    if(($media>0)&&($media<5)){
        $mensaje = "la calificación es \"insuficiente\"";
    } else if(($media>=5)&&($media<7)){
        $mensaje = "la calificación es \"suficiente\"";
    } else if(($media>=7)&&($media<9)){
        $mensaje = "la calificación es \"bien\"";
    } else if(($media>=9)&&($media<10)){
        $mensaje = "la calificación es \"notable\"";
    } else if($media==10){
        $mensaje = "la calificación es \"sobresaliente\"";
    }
    echo "La media de las tres notas es: $media ", $mensaje;
    ?>

