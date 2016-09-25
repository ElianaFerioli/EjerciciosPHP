<!DOCTYPE html>
<!--
Realiza un conversor de euros a pesetas. Ahora la cantidad en euros que se quiere convertir se
deberá introducir por teclado.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $euros = $_GET['euros'];
            echo "La cantidad de pesetas es: ", $euros*166.386;
            ?>
    </body>
</html>
