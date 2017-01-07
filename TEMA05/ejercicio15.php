<!DOCTYPE html>
<!--
Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
resultado, ambas con los números convenientemente alineados.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, td, tr{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <p>Realiza un programa que sea capaz de rotar todos los elementos de una matriz cuadrada una posición
            en el sentido de las agujas del reloj. La matriz debe tener 12 filas por 12 columnas y debe contener
            números generados al azar entre 0 y 100. Se debe mostrar tanto la matriz original como la matriz
            resultado, ambas con los números convenientemente alineados.</p>
        <?php
            echo "Este es el array original:<br>";
            //Crea el array
            echo "<table>";
            for($x=0; $x<12; $x++){
                echo "<tr>";
                for($i=0; $i<12; $i++){
                    $alea = rand(0, 100);
                    //lo coloca en el array
                    $arrayOriginal[$x][$i] = $alea;
                    //lo dibuja en la tabla
                    echo"<td>", $arrayOriginal[$x][$i], "</td>";
                }
                echo "</tr>";
            }
            echo "</table><br><br>";
            //rota el array
            $cambioMarco = 0;
            for ($j = 1; $j <= 6; $j++) {            
            //Rota línea superior
            $auxUno = $arrayOriginal[0 + $cambioMarco][11 - $cambioMarco];
            $x = 0 + $cambioMarco;
            for ($i = (11 - $cambioMarco); $i > $cambioMarco; $i--) {
                $arrayOriginal[$x][$i] = $arrayOriginal[$x][$i - 1];
            }           
            //Rota línea de la derecha
            $auxDos = $arrayOriginal[11 - $cambioMarco][11 - $cambioMarco];
            $i = 11 - $cambioMarco;
            for ($x = (11 - $cambioMarco); $x > $cambioMarco; $x--) {
                $arrayOriginal[$x][$i] = $arrayOriginal[$x - 1][$i];
            }
            $arrayOriginal[1 + $cambioMarco][11 - $cambioMarco] = $auxUno;
            //Rota línea de abajo
            $auxUno = $arrayOriginal[11 - $cambioMarco][0 + $cambioMarco];
            $x = 11 - $cambioMarco;
            for ($i = (0 + $cambioMarco); $i < (11 - $cambioMarco); $i++) {
                $arrayOriginal[$x][$i] = $arrayOriginal[$x][$i + 1];
            }
            $arrayOriginal[11 - $cambioMarco][10 - $cambioMarco] = $auxDos;
            //Rota línea de la izquierda
            $auxDos = $arrayOriginal[0 + $cambioMarco][0 + $cambioMarco];
            $i = 0 + $cambioMarco;
            for ($x = (0 + $cambioMarco); $x < (11 - $cambioMarco); $x++) {
                $arrayOriginal[$x][$i] = $arrayOriginal[$x + 1][$i];
            }
            $arrayOriginal[10 - $cambioMarco][0 + $cambioMarco] = $auxUno;
            //Aumenta el marco
            $cambioMarco++;
            }            
            echo "Este es el array modificado:<br>";
            //Muestra el array
            echo "<table>";
            for($x=0; $x<12; $x++){
                echo "<tr>";
                for($i=0; $i<12; $i++){
                    //lo dibuja en la tabla
                    echo"<td>", $arrayOriginal[$x][$i], "</td>";
                }
                echo "</tr>";
            }
            echo "</table><br><br>";
        ?>
    </body>
</html>
