<!DOCTYPE html>
<!--
Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
si es necesario.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            span{
                color: red;
            }
        </style>
        
    </head>
    <body>
        <p>Escribe un programa que genere 20 números enteros aleatorios entre 0 y 100 y que los almacene en
            un array. El programa debe ser capaz de pasar todos los números pares a las primeras posiciones del
            array (del 0 en adelante) y todos los números impares a las celdas restantes. Utiliza arrays auxiliares
            si es necesario.</p>
        <?php
            if(!isset($_GET['cadenaArray'])) {
                $arrayAleatorio;
                //Asigna los valores al array
                for($x = 0; $x < 20; $x++){
                    $arrayAleatorio[$x] = rand(0, 100);
                }
                //Los muestra y crea la cadena del array
                $cadenaArray;
                echo "Este es el array generado aleatoriamente:<br>";
                foreach ($arrayAleatorio as $num){
                    echo "$num"." ";
                    $cadenaArray = $cadenaArray." ".$num;
                }
        ?>
        <form method="get" action="ejercicio07.php">
            <input type="hidden" name="cadenaArray" value= <?php echo "\"$cadenaArray\""; ?>>
            <input type="submit" value="Cambiar array">
        </form>
        <?php
            } else {
                $cadenaArray = $_GET['cadenaArray'];
                //hace de la cadena un array
                $cadenaArray = substr($cadenaArray, 1);
                $cadenaArray = explode(" ", $cadenaArray);
                //muestra el array original
                //lo muestra
                echo "Este es el array original:<br>";
                foreach ($cadenaArray as $num){
                    echo "$num"." ";                   
                }
                //genera un array nuevo con los valores cambiados
                $nuevoArray;
                $x = 0;
                echo "<br>Este es el array con los valores cambiados: <br>";
                foreach ($cadenaArray as $num){
                    if(($num%2)==0){
                        $nuevoArray[$x] = $num;
                        $x++;
                    }                    
                }
                foreach ($cadenaArray as $num){
                    if(($num%2)!=0){
                        $nuevoArray[$x] = $num;
                        $x++;
                    }                    
                }
                //lo muestra
                foreach ($nuevoArray as $num){
                    echo "$num"." ";                   
                }
            }
        ?>
    </body>
</html>

