<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
        </style>
        
    </head>
    <body>
        <p>Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
            continuación se mostrará el contenido de ese array junto al índice (0 – 9). Seguidamente el programa
            pedirá dos posiciones a las que llamaremos “inicial” y “final”. Se debe comprobar que inicial es
            menor que final y que ambos números están entre 0 y 9. El programa deberá colocar el número de
            la posición inicial en la posición final, rotando el resto de números para que no se pierda ninguno.</p>
        <?php
            if(isset($_GET['numerosEnviados'])){
                $numerosEnviados = $_GET['numerosEnviados'];
                $numerosEnviados++;      
                if($numerosEnviados<10) {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                } else {
                    $numIntroducido = $_GET['numIntroducido'];
                    $cadenaNumero = $_GET['cadenaNumero']." ".$numIntroducido;
                    $noMasNumeros = true;
                    //Lo muestra
                    echo "Array original: ";
                    echo "<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";
                    }
                    echo "<br>---------------------------------<br>";
                    echo "$cadenaNumero";
                }
            } else {
                $numerosEnviados = 0;
                $cadenaNumero = "";
                $noMasNumeros = false;
            }                     
        ?>
        <?php if(!$noMasNumeros){        
        ?>
        <form method="get" action="ejercicio09.php">
            <input type="number" name="numIntroducido">
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="hidden" name="numerosEnviados" value= <?php echo "\"$numerosEnviados\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
        <?php
        } else {
        ?>
        <form method="get" action="ejercicio09Dos.php">
            Coloque la posicion inicial: 
            <input type="number" name="valorInicial"><br>
            Coloque la posicion final:
            <input type="number" name="valorFinal"><br>
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
       <?php
        }
       ?>
    </body>
</html>

