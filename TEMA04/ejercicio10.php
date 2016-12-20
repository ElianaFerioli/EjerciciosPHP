<!DOCTYPE html>
<!--
Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
terminado de introducir los datos cuando meta un número negativo.
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
        <p>Escribe un programa que calcule la media de un conjunto de números positivos introducidos por
            teclado. A priori, el programa no sabe cuántos números se introducirán. El usuario indicará que ha
            terminado de introducir los datos cuando meta un número negativo.</p>        
        <?php
            if(!isset($_GET['numUsuario'])) {
               $contador = 0;
            } else {
               $noMasNumeros = false;
               $numUsuario = $_GET['numUsuario'];
               if($numUsuario>0){
                   $suma = $_GET['suma'];
                   $suma = $suma + $numUsuario;
                   $contador = $_GET['contador'] + 1;
               } else {
                   $noMasNumeros = true;             
               }
            }            
        ?> 
        <form action="ejercicio10.php" methof="get">
            <input type="number" name="numUsuario">
            <input type="hidden" name="contador" value= <?php echo "\" $contador\"" ?>>
            <input type="hidden" name="suma" value= <?php echo "\" $suma\"" ?>>
            <?php
                if(!$noMasNumeros){
                    echo "<input type=\"submit\" value=\"Calcular media\">";
                } else {
                    echo "<input type=\"submit\" value=\"Calcular media\" disabled>";
                    echo "<br>";
                    $suma = $_GET['suma'];
                    $contador = $_GET['contador'];
                    $media = $suma/$contador;
                    echo "La media de los números introducidos es $media";
                }
                ?>            
        </form>
    </body>
</html>

