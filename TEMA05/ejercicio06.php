<!DOCTYPE html>
<!--
Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
pares de un color y los impares de otro.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            .pares{
                color: red;
            }
            .impares{
                color: blue;
            }
        </style>
        
    </head>
    <body>
        <p>Realiza un programa que pida 8 números enteros y que luego muestre esos números de colores, los
            pares de un color y los impares de otro.</p>
        <?php
            if(isset($_GET['numerosEnviados'])){
                $numerosEnviados = $_GET['numerosEnviados'];
                $numerosEnviados++;      
                if($numerosEnviados<8) {
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
                        if(($num%2)==0){
                            echo "<span class=\"pares\">$num</span>"." ";
                        } else {
                            echo "<span class=\"impares\">$num</span>"." ";
                        }
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
        <form method="get" action="ejercicio06.php">
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

