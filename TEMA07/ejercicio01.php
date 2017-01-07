<?php
    session_start();
    //Controla mediante sesiones, las veces que se introduce un número
            if(isset($_SESSION['divisor'])){
                if($_GET['numero']>=0){
                    $_SESSION['divisor']++;
                    $_SESSION['suma'] = $_SESSION['suma'] + $_GET['numero'];
                } else {
                    $_SESSION['noMasNumeros'] = true;
                }              
            } else {
                $_SESSION['divisor'] = 0;
                $_SESSION['suma'] = 0;   
                $_SESSION['noMasNumeros'] = false;
            }            
    ?>
<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
            teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
            terminado de introducir los datos cuando meta un número negativo. Utiliza sesiones.</p>
        <form action="ejercicio01.php" methid="get">
            <input type="number" name="numero">
            <?php
                if(!$_SESSION['noMasNumeros']) {
            ?>
            <input type="submit" value="Introducir número">
            <?php
                } else {
            ?>
            <input type="submit" value="Introducir número" disabled
            <p>La media de los números es: <?php echo $_SESSION['suma']/$_SESSION['divisor']; ?></p>
            <?php
                }
            ?>
        </form>
    </body>
</html>
