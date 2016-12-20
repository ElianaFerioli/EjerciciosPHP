<!--
Escribe un programa que dada una hora determinada (horas y minutos), calcule los segundos que
faltan para llegar a la medianoche.
-->

<?php 
    
    $hora = $_GET['hora'];
    $minutos = $_GET['minutos'];
    $falta = (((24-($hora)-1)*60) + (60 - $minutos))*60;
    echo "Para medianoche faltan $falta segundos.";   
    ?>



