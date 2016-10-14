<!DOCTYPE html>
<!--
Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
muestra el contenido del array.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        </style>
        
    </head>
    <body>
        <p>Escribe un programa que lea 15 números por teclado y que los almacene en un array. Rota los
            elementos de ese array, es decir, el elemento de la posición 0 debe pasar a la posición 1, el de la 1 a
            la 2, etc. El número que se encuentra en la última posición debe pasar a la posición 0. Finalmente,
            muestra el contenido del array.</p>
        <?php
            if(isset($_GET['numerosEnviados'])){
                $numerosEnviados = $_GET['numerosEnviados'];
                $numerosEnviados++;      
                if($numerosEnviados<15) {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                } else {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                    $noMasNumeros = true;
                    //Explota la cadena
                    $cadenaNumero = substr($cadenaNumero, 1);
                    $cadenaNumero = explode(" ", $cadenaNumero);
                    //Lo muestra
                    echo "Array original: ";
                    foreach ($cadenaNumero as $num) {
                        echo "$num"." ";
                    }
                    //Rota el array
                    $aux = $cadenaNumero[14];
                    for($x=14; $x>0; $x--){
                        $cadenaNumero[$x] = $cadenaNumero[$x-1];
                    }
                    $cadenaNumero[0] = $aux;
                    //Lo muestra
                    echo "<br>Array rotado: ";
                    foreach ($cadenaNumero as $num) {
                        echo "$num"." ";
                    }
                }
            } else {
                $numerosEnviados = 0;
                $cadenaNumero = "";
                $noMasNumeros = false;
            }                     
        ?>
        <?php if(!$noMasNumeros){        
        ?>
        <form method="get" action="ejercicio03.php">
            <input type="number" name="numIntroducido">
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="hidden" name="numerosEnviados" value= <?php echo "\"$numerosEnviados\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
        <?php
        }
        ?>
          
    </body>
</html>



