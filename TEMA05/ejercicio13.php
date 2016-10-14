<!DOCTYPE html>
<!--
Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendi-
dos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
cumplan los siguientes requisitos:
• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
• El mínimo debe aparecer en color azul.
• El resto de números debe aparecer en color negro.
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
        <p>
            Rellena un array bidimensional de 6 filas por 9 columnas con números enteros positivos comprendi-
            dos entre 100 y 999 (ambos incluidos). Todos los números deben ser distintos, es decir, no se puede
            repetir ninguno. Muestra a continuación por pantalla el contenido del array de tal forma que se
            cumplan los siguientes requisitos:
            <br>• Los números de las dos diagonales donde está el mínimo deben aparecer en color verde.
            <br>• El mínimo debe aparecer en color azul.
            <br>• El resto de números debe aparecer en color negro.
        </p>
        <?php
        echo "Este es el array original: <br>";
        echo "<table>";
        //Inicializa el mínimo
        $min = PHP_INT_MAX;
        //Crea el array
        for($x=0; $x<6; $x++){
            echo "<tr>";
            for($i=0; $i<9; $i++){
                //Corrobora que no se repitan
                $alea = rand(100, 900);
                while(in_array($alea, $arrayAleatorio)){
                    $alea = rand(100, 900);
                }
                $arrayAleatorio[$x] = $alea;
                //Corrobora si es el mínimo
                if($alea < $min){
                    $min = $alea;
                    $minX = $x;
                    $minI = $i;
                }
                //lo coloca en el array
                $arrayOriginal[$x][$i] = $alea;
                //lo dibuja en la tabla
                echo"<td>", $arrayOriginal[$x][$i], "</td>";
            }
            echo "</tr>";
        }
        echo "</table><br><br>";
        echo "Este es el array Modificado: <br>";
        echo "<table>";
        //dibuja el array
        for($x=0; $x<6; $x++){
            echo "<tr>";
            for($i=0; $i<9; $i++){
                if ($arrayOriginal[$x][$i] == $min) {
                    echo '<td><span style="color: blue; font-weight:bold">'.$arrayOriginal[$x][$i].' </span></td>';
                  } else if (abs((abs($x) - abs($minX))) == abs((abs($i) - abs($minI)))) {
                    echo '<td><span style="color: green; font-weight:bold">'.$arrayOriginal[$x][$i].' </span></td>';
                  } else {
                    echo '<td>'.$arrayOriginal[$x][$i].'</td>';
                  }             
            }
            echo "</tr>";
        }
        
        echo "</table>";
        ?>
    </body>
</html>
