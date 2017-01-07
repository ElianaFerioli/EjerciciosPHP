<!DOCTYPE html>
<!--
Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
los tres arrays dispuesto en tres columnas.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, tr, th {
                text-align: center;
                border: 1px solid black;
            }
        </style>
        
    </head>
    <body>
        <p>Define tres arrays de 20 números enteros cada una, con nombres “numero”, “cuadrado” y “cubo”.
            Carga el array “numero” con valores aleatorios entre 0 y 100. En el array “cuadrado” se deben
            almacenar los cuadrados de los valores que hay en el array “numero”. En el array “cubo” se deben
            almacenar los cubos de los valores que hay en “numero”. A continuación, muestra el contenido de
            los tres arrays dispuesto en tres columnas.</p>
        <?php
            //Asigna números
            for($x = 0; $x < 10; $x++){                
                $numero[$x] = rand(0, 100);
            }
            //Asigna cuadrados
            $x = 0;
            foreach ($numero as $num){
                $cuadrado[$x] = $num*$num;
                $x++;
            }
            //Asigna cubos
            $x = 0;
            foreach ($numero as $num){
                $cubo[$x] = $num*$num;
                $x++;
            }
            //Los muestra
            echo "<table>";
            echo "<tr><th>Número</th><th>Cuadrado</th><th>Cubo</th></tr>";
            for($x = 0; $x <10; $x++){
                echo "<tr>";
                echo "<td>$numero[$x]</td>";
                echo "<td>$cuadrado[$x]</td>";
                echo "<td>$cubo[$x]</td>";
                echo "</tr>";
            }
            echo "</table>";                       
        ?>        
    </body>
</html>

