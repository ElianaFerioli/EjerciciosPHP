<!--
Vamos a ampliar uno de los ejercicios de la relación anterior para considerar las horas extras. Escribe
un programa que calcule el salario semanal de un trabajador teniendo en cuenta que las horas
ordinarias (40 primeras horas de trabajo) se pagan a 12 euros la hora. A partir de la hora 41, se
pagan a 16 euros la hora.
-->

<?php 
    
    $horas = $_GET['horas'];
    $horasExtras = 0;
    
    if($horas>40) {
        $horasExtras = $horas - 40;
        $horas = 40;
    }    
    echo "El total a cobrar es ", (($horas * 12)+($horasExtras *16)), " euros.";
    ?>


