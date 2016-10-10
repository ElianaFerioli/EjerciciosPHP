<!DOCTYPE html>
<!--
Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.
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
        <p>Realiza un programa que nos diga cuántos dígitos tiene un número introducido por teclado.</p>
        <form action="ejercicio09.php" methof="get">
            <input type="number" min="1" name="numUsuario">
            <input type="submit" value="¿Cuantos dígitos tiene?">
        </form>
        <?php
            if(isset($_GET['numUsuario'])){
               $numUsuario = $_GET['numUsuario'];
               $contador = 0;
               while($numUsuario>=1){
                   $contador++;
                   $numUsuario = $numUsuario/10;
               }
               echo "El número tiene $contador dígitos.";
            }
        ?>        
    </body>
</html>
