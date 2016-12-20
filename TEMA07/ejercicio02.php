<?php
    session_start();
    //Controla mediante sesiones, las veces que se introduce un número
            if(isset($_SESSION['noMasNumeros'])){
                if($_GET['numero']>=0){
                    $_SESSION['numerosIntroducidos']++;
                    if(($_GET['numero']%2)==0){
                        if($_GET['numero']>$_SESSION['mayorPar']){
                            $_SESSION['mayorPar'] = $_GET['numero'];
                        }
                    } else {
                        $_SESSION['numImpares']++;
                        $_SESSION['sumaImpares'] = $_SESSION['sumaImpares'] + $_GET['numero'];
                    }
                } else {
                    $_SESSION['noMasNumeros'] = true;
                }              
            } else {
                $_SESSION['numImpares'] = 0;
                $_SESSION['mayorPar'] = -PHP_INT_MAX;
                $_SESSION['sumaImpares'] = 0;                
                $_SESSION['noMasNumeros'] = false;
            }            
    ?>
<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
en el cómputo. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Realiza un programa que vaya pidiendo números hasta que se introduzca un numero negativo y
            nos diga cuantos números se han introducido, la media de los impares y el mayor de los pares. El
            número negativo sólo se utiliza para indicar el final de la introducción de datos pero no se incluye
            en el cómputo. Utiliza sesiones.</p>
        <form action="ejercicio02.php" methid="get">
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
               <br>La media de los números impares es: <?php echo $_SESSION['sumaImpares']/$_SESSION['numImpares'];?>
               <br>El mayor número par introducido es <?php echo $_SESSION['mayorPar'];?>
               <br>La cantidad de números introducido fue: <?php echo $_SESSION['numerosIntroducidos'];?>
            </p>
            <?php
                }
            ?>
        </form>
    </body>
</html>
