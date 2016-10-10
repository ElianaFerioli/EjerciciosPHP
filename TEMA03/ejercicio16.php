<!--
Escribe un programa que diga cuál es la última cifra de un número entero introducido por teclado.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $ultimoDigito = $numUno%10;
    echo "El último dígito es $ultimoDigito.";
    ?>



