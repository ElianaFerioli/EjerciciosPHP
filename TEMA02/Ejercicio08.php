<!DOCTYPE html>
<!--
Escribe un programa que calcule el salario semanal de un trabajador en base a las horas trabajadas.
Se pagarán 12 euros por hora.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $horasTrabajadas = $_GET['horasTrabajadas'];
            $totalSemanal = $horasTrabajadas*12;
            echo "El total semanal a cobrar es: ", $totalSemanal, " euros.";
        ?>
    </body>
</html>

