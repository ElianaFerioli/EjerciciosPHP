<!DOCTYPE html>
<!--
Escribe un programa que muestre por pantalla 10 palabras en inglés junto a su correspondiente
traducción al castellano. Las palabras deben estar distribuidas en dos columnas. Utiliza la etiqueta
<table> de HTML.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <style>
            table, tr, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <?php
            echo "<table>";
            echo "<tr>", "<td>", 'Madre', "</td><td>", 'Mother', "</td></tr>";
            echo "<tr>", "<td>", 'Padre', "</td><td>", 'Father', "</td></tr>";
            echo "<tr>", "<td>", 'Perro', "</td><td>", 'Dog', "</td></tr>";
            echo "<tr>", "<td>", 'Gato', "</td><td>", 'Cat', "</td></tr>";
            echo "<tr>", "<td>", 'Mesa', "</td><td>", 'Table', "</td></tr>";
            echo "<tr>", "<td>", 'Pizarra', "</td><td>", 'Blackboard', "</td></tr>";
            echo "<tr>", "<td>", 'Bolígrafo', "</td><td>", 'Pen', "</td></tr>";
            echo "<tr>", "<td>", 'Libro', "</td><td>", 'Book', "</td></tr>";
            echo "<tr>", "<td>", 'Vaca', "</td><td>", 'Cow', "</td></tr>";
            echo "<tr>", "<td>", 'Canción', "</td><td>", 'Song', "</td></tr>";
            echo "</table>";
        ?>
    </body>
</html>
