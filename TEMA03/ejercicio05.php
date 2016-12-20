<!--
Realiza un programa que resuelva una ecuación de primer grado (del tipo ax + b = 0).
-->

<?php 
    
    $valorA = $_GET['valorA'];
    $valorB = $_GET['valorB'];
    $valorC = $_GET['valorC'];
    $operador = $_GET['operador'];
    $x = 0;
    if($operador=="+"){
        $x = ($valorC-$valorB)/$valorA;
    } else {
        $x = ($valorC+$valorB)/$valorA;
    }
    echo "El resultado de la configuración es $x";
    ?>




