<?php
    session_start();
?>

<!DOCTYPE html>
<!--
Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
se indican del 1 al 8.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, tr{
                border: 1px solid black;
            }
            td{
                width: 50px;
                height: 50px;                
            }
            .negras{
                background-color: black;
            }
            .blancas{
                background-color: white;
            }
            #alfil{
                background-image: url('./alfil.png');
            }
            #diagonal{
                background-color: red;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<p>Usuario:", $_SESSION['nomUsuario'], "</p>";
        ?>
        <p>Escribe un programa que, dada una posición en un tablero de ajedrez, nos diga a qué casillas podría
            saltar un alfil que se encuentra en esa posición. Indícalo de forma gráfica sobre el tablero con un
            color diferente para estas casillas donde puede saltar la figura. El alfil se mueve siempre en diagonal.
            El tablero cuenta con 64 casillas. Las columnas se indican con las letras de la “a” a la “h” y las filas
            se indican del 1 al 8.</p>
        <table>
        <?php
            if(!isset($_GET['alfilX'])){
                //dibuja el tablero
                for($x = 0; $x < 8; $x++){
                    echo "<tr>";
                    for($i = 0; $i < 8; $i++){
                        if(($x%2)==0){
                            if(($i%2)==0){
                                echo "<td class=\"blancas\"></td>"; 
                            } else {
                                echo "<td class=\"negras\"></td>";
                            }
                        } else {
                            if(($i%2)==0){
                                echo "<td class=\"negras\"></td>"; 
                            } else {
                                echo "<td class=\"blancas\"></td>";
                            }
                        }             

                    }
                    echo "</tr>";
                }    
            } else {
                //recoge los datos
                $alfilX = $_GET['alfilX'];
                $alfilY = $_GET['alfilY'];
                //dibuja el tablero
                for($x = 0; $x < 8; $x++){
                    echo "<tr>";
                    for($i = 0; $i < 8; $i++){                        
                        if(($x%2)==0){
                            if(($i%2)==0){                                
                                if(($x==$alfilX-1)&&($i==$alfilY-1)){
                                    echo "<td class=\"blancas\" id=\"alfil\"></td>";
                                } else {
                                    if (abs((abs($x) - abs($alfilX-1))) == abs((abs($i) - abs($alfilY-1)))) {
                                        echo "<td class=\"blancas\" id=\"diagonal\"></td>";
                                    } else {
                                        echo "<td class=\"blancas\"></td>";
                                    }  
                                }                                 
                            } else {
                                if(($x==$alfilX-1)&&($i==$alfilY-1)){
                                    echo "<td class=\"negras\" id=\"alfil\"></td>";
                                } else {
                                    if (abs((abs($x) - abs($alfilX-1))) == abs((abs($i) - abs($alfilY-1)))) {
                                        echo "<td class=\"negras\" id=\"diagonal\"></td>";
                                    } else {
                                        echo "<td class=\"negras\"></td>";
                                    }  
                                }  
                            }
                        } else {
                            if(($i%2)==0){
                                if(($x==$alfilX-1)&&($i==$alfilY-1)){
                                    echo "<td class=\"negras\" id=\"alfil\"></td>";
                                } else {
                                    if (abs((abs($x) - abs($alfilX-1))) == abs((abs($i) - abs($alfilY-1)))) {
                                        echo "<td class=\"negras\" id=\"diagonal\"></td>";
                                    } else {
                                        echo "<td class=\"negras\"></td>";
                                    }
                                }
                            } else {
                                if(($x==$alfilX-1)&&($i==$alfilY-1)){
                                    echo "<td class=\"blancas\" id=\"alfil\"></td>";
                                } else {
                                    if (abs((abs($x) - abs($alfilX-1))) == abs((abs($i) - abs($alfilY-1)))) {
                                        echo "<td class=\"blancas\" id=\"diagonal\"></td>";
                                    } else {
                                        echo "<td class=\"blancas\"></td>";
                                    }  
                                }  
                            }
                        }             

                    }
                    echo "</tr>";
            }    
            }                    
        ?>
        </table>
        <form action="ejercicio14.php" method="get">
            Introduzca la posición X del alfil:
            <input type="number" name="alfilX" min=1 max=8>
            <br>
            Introduzca la posición Y del alfil:
            <input type="number" name="alfilY" min=1 max=8> 
            <br>
            <input type="submit" value="Ubicar">  
        </form>
    </body>
</html>

