<?php
    session_start();
    //Controla mediante sesiones, las veces que se introduce un número
            if(isset($_SESSION['numerosIntroducidos'])){
                if(($_SESSION['suma'] + $_GET['numero'])<10000){
                    $_SESSION['suma'] = $_SESSION['suma'] + $_GET['numero'];
                    $_SESSION['numerosIntroducidos']++;                    
                } else {
                    $_SESSION['noMasNumeros'] = true;
                }
            } else {
                $_SESSION['suma'] = 0;
                $_SESSION['numerosIntroducidos'] = 0;
            }            
    ?>
<!DOCTYPE html>
<!--
Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
el contador de los números introducidos y la media. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Escribe un programa que permita ir introduciendo una serie indeterminada de números mientras
            su suma no supere el valor 10000. Cuando esto último ocurra, se debe mostrar el total acumulado,
            el contador de los números introducidos y la media. Utiliza sesiones.</p>
        <form action="ejercicio03.php" methid="get">
            <input type="number" name="numero">
            <?php
                if(!$_SESSION['noMasNumeros']) {
            ?>
            <input type="submit" value="Introducir número">
            <?php
                } else {
            ?>
            <input type="submit" value="Introducir número" disabled
            <p>
               <br>El total de los números introducidos es: <?php echo $_SESSION['numerosIntroducidos'];?>
               <br>La suma acumulada es <?php echo $_SESSION['suma'];?>
               <br>La media de lo introducido es: <?php echo $_SESSION['suma']/$_SESSION['numerosIntroducidos'];?>
            </p>
            <?php
                }
            ?>
    </body>
</html>
