<!DOCTYPE html>
<!--
Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.
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
        <p>Escribe un programa que pida 10 números por teclado y que luego muestre los números introducidos
            junto con las palabras “máximo” y “mínimo” al lado del máximo y del mínimo respectivamente.</p>
        <?php
            if(isset($_GET['numerosEnviados'])){
                $numerosEnviados = $_GET['numerosEnviados'];
                $numerosEnviados++;      
                
                if($numerosEnviados<10) {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                } else {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                    $noMasNumeros = true;
                    //Explota la cadena
                    $cadenaNumero = substr($cadenaNumero, 1);
                    $cadenaNumero = explode(" ", $cadenaNumero);                    
                    $min = PHP_INT_MAX;
                    $max = -PHP_INT_MAX;
                    //Asigna mínimo y máximo
                    foreach ($cadenaNumero as $num) {
                        if($num < $min){
                            $min = $num;
                        }
                        if($num > $max){
                            $max = $num;
                        }
                    } 
                    //Muestra el array
                    foreach ($cadenaNumero as $num) {
                        echo "$num"." ";
                    } 
                    echo "<br>El min es $min y el max es $max";
                }
            } else {
                $numerosEnviados = 0;
                $cadenaNumero = "";
                $noMasNumeros = false;
            }                     
        ?>      
         <?php if(!$noMasNumeros){        
        ?>
        <form method="get" action="ejercicio02.php">
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

