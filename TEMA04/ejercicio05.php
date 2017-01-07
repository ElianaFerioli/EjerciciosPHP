<!DOCTYPE html>
<!--
Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while .
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Muestra los números del 320 al 160, contando de 20 en 20 utilizando un bucle while.</p>
        <?php
            $x = 320;
            while($x>=160){
                echo "$x <br>";
                $x = $x - 20;
            }
        ?>        
    </body>
</html>

