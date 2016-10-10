<!--
Escribe un programa que diga cuál es la primera cifra de un número entero introducido por teclado.
Se permiten números de hasta 5 cifras.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $contador = 0;
    //Averigua la longitud del número
    $aux = $numUno;
    while($aux>1){
        $contador++;
        $aux = $aux/10;
    }
    $divisor = pow(10, ($contador-1));
    $primerDigito = floor($numUno/$divisor);
    echo "El último dígito es $primerDigito.";
    ?>
