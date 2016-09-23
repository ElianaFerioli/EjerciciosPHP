<!DOCTYPE html>
<!--
Escribe un programa que muestre tu horario de clase mediante una tabla. Aunque se puede hacer
íntegramente en HTML (igual que los ejercicios anteriores), ve intercalando código HTML y PHP
para familiarizarte con éste último.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, tr, td, th{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<table>";
            echo "<tr>", "<th>", 'Lunes', "</th><th>";
            echo 'Martes', "</th><th>";
            echo 'Miercoles', "</th><th>";
            echo 'Jueves', "</th><th>";
            echo 'Viernes', "</th></tr>";
            echo "<tr>", "<td>", 'EIE', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DWEC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'DWES', "</td></tr>";
            echo "<tr>", "<td>", 'EIE', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DWEC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'DWES', "</td></tr>";
            echo "<tr>", "<td>", 'EIE', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DWEC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'DWES', "</td></tr>";
            echo "<tr>", "<td>", 'HLC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DAW', "</td><td>";
            echo 'DWEC', "</td></tr>";
            echo "<tr>", "<td>", 'HLC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DAW', "</td><td>";
            echo 'DWEC', "</td></tr>";
            echo "<tr>", "<td>", 'HLC', "</td><td>";
            echo 'DWES', "</td><td>";
            echo 'INT', "</td><td>";
            echo 'DAW', "</td><td>";
            echo 'DWEC', "</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>

