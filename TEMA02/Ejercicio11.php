<!DOCTYPE html>
<!--
Realiza un conversor de Kb a Mb.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $kiloBytes= $_GET['kiloBytes'];
            $megaBytes = $kiloBytes/1024;
            echo "La cantidad de kiloBytes es: ", $megaBytes, "Mb";
        ?>
    </body>
</html>
