<?php
    session_start();
    if(isset($_GET['numeroIntroducido'])){
                if($_GET['numeroIntroducido']>=0){
                    //Lo guarda en el array
                    $_SESSION['numerosIntroducidos'] = $_SESSION['numerosIntroducidos']." ".$_GET['numeroIntroducido'];
                    $_SESSION['cantidad']++;
                    //verifica si es primo
                    $divisores = 0;
                    for($x = 1; $x <= $_GET['numeroIntroducido']; $x++){
                        if(($_GET['numeroIntroducido']%$x)==0){
                            $divisores++;
                        }
                    }
                    //Si es primo lo guarda en la sesion de primos y sino lo guarda en la sesion noprimos
                    if($divisores <= 2){
                        $_SESSION['primos'] = $_SESSION['primos']." ".$_GET['numeroIntroducido'];
                    } else {
                        $_SESSION['noPrimos'] = $_SESSION['noPrimos']." ".$_GET['numeroIntroducido'];;
                    }   
                } else {
                        $_SESSION['noMas'] = true;
                }
            } else {
                 $_SESSION['numerosIntroducido'] = "";
                 $_SESSION['primos'] = "";
                 $_SESSION['noPrimos'] = "";
                 $_SESSION['noMas'] = false;
                 $_SESSION['cantidad'] = 0;
            }  
?>
<!DOCTYPE html>
<!--
Realiza un programa que vaya pidiendo números positivos por teclado y que los vaya almacenando en un
array. La introducción de números termina cuando el usuario mete un número negativo. Por tanto, a priori,
el programa no sabe cuántos números introducirá el usuario. El último número introducido (el negativo) se
desprecia. A continuación se debe mostrar el contenido de ese array junto al índice. Seguidamente el
programa debe colocar los números primos al final y los no primos al principio tal y como se muestra en el
ejemplo.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, td, tr{
                border: 1px solid black;
                border-collapse: collapse;
                width: 400px;
            }
        </style>
    </head>
    <body>
        <?php
            if(!$_SESSION['noMas']){            
         ?>
        <form action="Ex09emfn1.php" method="get">
            Introduzca un número:
            <br>
            <input type="number" name="numeroIntroducido">
            <input type="submit" value="OK">
        </form>
        <?php
            } else {
                //Explota las cadenas
                //original
                $cadenaNumeros = $_SESSION['numerosIntroducidos'];
                $cadenaNumeros = substr($cadenaNumeros, 1);
                $cadenaNumeros = explode(" ", $cadenaNumeros);
                //primos
                $cadenaNumerosPrimos = $_SESSION['primos'];
                $cadenaNumerosPrimos = substr($cadenaNumerosPrimos, 1);
                $cadenaNumerosPrimos = explode(" ", $cadenaNumerosPrimos);
                //noPrimos
                $cadenaNumerosNoPrimos = $_SESSION['noPrimos'];
                $cadenaNumerosNoPrimos = substr($cadenaNumerosNoPrimos, 1);
                $cadenaNumerosNoPrimos = explode(" ", $cadenaNumerosNoPrimos);    
                //Mezcla primos con no primos
                $nuevoArray;
                $x = 0;
                foreach($cadenaNumerosNoPrimos as $num){
                    $nuevoArray[$x] = $num;
                    $x++;
                }
                foreach($cadenaNumerosPrimos as $num){
                    $nuevoArray[$x] = $num;
                    $x++;
                }
                
                //Muestra el original
                echo "Array Original:<br>";
                echo "<table>";
                    for ($i = 0; $i < 2; $i++){
                        echo "<tr>";
                        if($i==0){
                            for($j = 0; $j < $_SESSION['cantidad']; $j++){
                                echo "<td>$j</td>";
                            }
                        } else {
                            foreach($cadenaNumeros as $num){
                                echo "<td>$num</td>";
                            }
                        }                        
                        echo "</tr>";
                    }
                    echo "</table>";
                //Muestra el ordenado
                echo "Array Ordenado:<br>";
                echo "<table>";
                    for ($i = 0; $i < 2; $i++){
                        echo "<tr>";
                        if($i==0){
                            for($j = 0; $j < $_SESSION['cantidad']; $j++){
                                echo "<td>$j</td>";
                            }
                        } else {
                            foreach($nuevoArray as $num){
                                echo "<td>$num</td>";
                            }
                        }                        
                        echo "</tr>";
                    }
                
            }
        ?>
        
    </body>
</html>

