<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. La cantidad en euros que se quiere convertir deberá estar
almacenada en una variable.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $euros = 10;
            $pesetas = 166.386;
            echo 'Esto es un conversor de Euros a Pesetas';
            echo "<br>";
            echo "<strong> $euros </strong>", ' euros son ', $euros*$pesetas, ' pesetas.';
        ?>
    </body>
</html>
