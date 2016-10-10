<!--
Realiza un programa que pida una hora por teclado y que muestre luego buenos días, buenas
tardes o buenas noches según la hora. Se utilizarán los tramos de 6 a 12, de 13 a 20 y de 21 a 5.
respectivamente. Sólo se tienen en cuenta las horas, los minutos no se deben introducir por teclado.
-->

<?php 
    
    $hora = $_GET['hora'];
    if(($hora >= 6)&&($hora<=12)){
        echo "Buenos dias.";
    } else if (($hora>=13)&&($hora<=20)){
        echo "Buenas tardes.";
    } else {
        echo "Buenas noches";
    }
    ?>

