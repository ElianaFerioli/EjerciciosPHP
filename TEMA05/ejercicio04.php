<!DOCTYPE html>
<!--
Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
Los números que se han cambiado deben aparecer resaltados de un color diferente.
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
        <p>Escribe un programa que genere 100 números aleatorios del 0 al 20 y que los muestre por pantalla
            separados por espacios. El programa pedirá entonces por teclado dos valores y a continuación
            cambiará todas las ocurrencias del primer valor por el segundo en la lista generada anteriormente.
            Los números que se han cambiado deben aparecer resaltados de un color diferente.</p>
        <?php
            if(!isset($_GET['cadenaArray'])) {
                $arrayAleatorio;
                //Asigna los valores al array
                for($x = 0; $x < 100; $x++){
                    $arrayAleatorio[$x] = rand(0, 20);
                }
                //Los muestra y crea la cadena del array
                $cadenaArray;
                echo "Este es el array generado aleatoriamente:<br>";
                foreach ($arrayAleatorio as $num){
                    echo "$num"." ";
                    $cadenaArray = $cadenaArray." ".$num;
                }
        ?>
        <form method="get" action="ejercicio04.php">
            Intrpduzca el número que quiere cambiar:
            <input type="number" name="numAcambiar" min=0 max=20>
            <br>
            Introduzca el nuevo valor:
            <input type="number" name="nuevoValor">
            <br>
            <input type="hidden" name="cadenaArray" value= <?php echo "\"$cadenaArray\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
        <?php
            } else {
                $cadenaArray = $_GET['cadenaArray'];
                $valorAcambiar = $_GET['numAcambiar'];
                $nuevoValor = $_GET['nuevoValor'];
                //Muestra el array original
                echo "Este es el array original: <br> $cadenaArray";
                //hace de la cadena un array
                $cadenaArray = substr($cadenaArray, 1);
                $cadenaArray = explode(" ", $cadenaArray);
                //muestra el array con los valores cambiados
                echo "<br>Este es el array con los valores cambiados: <br>";
                foreach ($cadenaArray as $num){
                    if($num==$valorAcambiar){
                        echo "<span>$nuevoValor</span>"." ";
                    } else {
                        echo "$num"." ";
                    }                    
                }
            }
        ?>
    </body>
</html>

