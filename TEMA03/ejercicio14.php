<!--
Realiza un programa que diga si un número introducido por teclado es par y/o divisible entre 5.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $esPar = false;
    $esMultiplo = false;
    
    if(($numUno%2)==0){
        $esPar = true;
        echo "El número $numUno es par. <br>";
    }
    if(($numUno%5)==0){
        $esPar = true;
        echo "El número $numUno es múltiplo de cinco.";
    }
    if((!$esPar)&&(!$esMultiplo)){
        echo "El número $numUno ni es par ni es módulo de cinco.";
    }
    ?>

