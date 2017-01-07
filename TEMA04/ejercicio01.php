<!DOCTYPE html>
<!--
Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for .
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Muestra los números múltiplos de 5 de 0 a 100 utilizando un bucle for.</p>
        <?php
            for($x = 0; $x<=100; $x++){
                if(($x%5)==0){
                    echo "$x es múltiplo de 5 <br>";
                }
            }
        ?>        
    </body>
</html>


