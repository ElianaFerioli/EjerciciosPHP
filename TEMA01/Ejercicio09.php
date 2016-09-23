<!DOCTYPE html>
<!--
Realiza un conversor de pesetas a euros. La cantidad en pesetas que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $pesetas = 1000;
            $euros = 0.0166386;
            echo 'Esto es un conversor de Pesetas a Euros';
            echo "<br>";
            echo "<strong> $pesetas</strong>", ' pesetas son ', $pesetas*$euros, ' euros.';
        ?>
    </body>
</html>

