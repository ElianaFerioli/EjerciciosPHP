<!--
Realiza un programa que diga si un número entero positivo introducido por teclado es capicúa. Se
permiten números de hasta 5 cifras.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $nuevoNum;
    $contador = 0;
    //Averigua la longitud del número
    $aux = abs($numUno);
    while($aux>1){
        $contador++;
        $aux = $aux/10;
    }
    $aux = $numUno;
    for($x = $contador; $x > 0; $x--){
        $nuevoNum = $nuevoNum + $numUno%10;
        $numUno = $numUno/10;
        $nuevoNum = $nuevoNum * 10;
    }
    $nuevoNum = $nuevoNum /10;
    if($nuevoNum==$aux) {
        echo "El número $aux es capicúa.";
    } else {
        echo "El número $aux no es capicúa.";
    }
    ?>
