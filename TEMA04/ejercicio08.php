<!DOCTYPE html>
<!--
Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
en una tabla ( <table> en HTML).
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, tr, td{
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <p>Muestra la tabla de multiplicar de un número introducido por teclado. El resultado se debe mostrar
            en una tabla (en HTML).</p>
        <form action="ejercicio08.php" methof="get">
            <input type="number" min="1" name="numUsuario">
            <input type="submit" value="Crear tabla">
        </form>
        <?php
            if(isset($_GET['numUsuario'])){
                $numUsuario = $_GET['numUsuario'];
                echo "<table>";
                for($x=1; $x <= 10; $x++){
                    $valor = $x*$numUsuario;
                    echo "<tr>";
                    echo "<td>$x X $numUsuario </td>";
                    echo "<td>$valor</td>";
                    echo "</tr>";
                }
                echo "</table>";
            }
        ?>        
    </body>
</html>
