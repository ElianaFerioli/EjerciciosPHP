<!--
Realiza un programa que nos diga cuántos dígitos tiene un número entero que puede ser positivo o
negativo. Se permiten números de hasta 5 dígitos.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $contador = 0;
    //Averigua la longitud del número
    $aux = abs($numUno);
    while($aux>1){
        $contador++;
        $aux = $aux/10;
    }
    echo "El número tiene $contador dígitos.";
    ?>