<!DOCTYPE html>
<!--
Realiza un conversor de Mb a Kb.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $megaBytes= $_GET['megaBytes'];
            $kiloBytes = $megaBytes*1024;
            echo "La cantidad de kiloBytes es: ", $kiloBytes, "Kb";
        ?>
    </body>
</html>


