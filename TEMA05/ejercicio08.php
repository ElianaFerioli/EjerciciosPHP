<!DOCTYPE html>
<!--
Realiza un programa que pida 10 números por teclado y que los almacene en un array. A
continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
el array resultante.
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
            continuación se mostrará el contenido de ese array junto al índice (0 – 9) utilizando para ello una
            tabla. Seguidamente el programa pasará los primos a las primeras posiciones, desplazando el resto
            de números (los que no son primos) de tal forma que no se pierda ninguno. Al final se debe mostrar
            el array resultante..</p>
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
                    //Explota la cadena
                    $cadenaNumero = substr($cadenaNumero, 1);
                    $cadenaNumero = explode(" ", $cadenaNumero);
                    //Lo muestra
                    echo "Array original: ";
                    echo "<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";
                    }
                    echo "<br>---------------------------------<br>";
                    foreach ($cadenaNumero as $num) {
                        echo "$num"." ";
                    }
                    //pasa los primos delante
                    $primosDelante;
                    $x = 0;
                    foreach($cadenaNumero as $num){
                        //comprueba si es primo
                        $divisores = 0;
                        for($i = 1; $i <= $num; $i++){
                            if(($num%$i)==0){
                                $divisores++;
                            }
                        }
                        if($divisores<=2){
                            $primosDelante[$x] = $num;
                            $x++;
                        }
                    }
                    foreach($cadenaNumero as $num){
                        //comprueba si es primo
                        $divisores = 0;
                        for($i = 1; $i <= $num; $i++){
                            if(($num%$i)==0){
                                $divisores++;
                            }
                        }
                        if($divisores>2){
                            $primosDelante[$x] = $num;
                            $x++;
                        }
                    }
                    //Muestra el nuevo array
                    echo "<br><br><br>Array con primos delante: ";
                    echo "<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";
                    }
                    echo "<br>---------------------------------<br>";
                    foreach ($primosDelante as $num) {
                        echo "$num"." ";
                    }
                }
            } else {
                $numerosEnviados = 0;
                $cadenaNumero = "";
                $noMasNumeros = false;
            }                     
        ?>
        <?php if(!$noMasNumeros){        
        ?>
        <form method="get" action="ejercicio08.php">
            <input type="number" name="numIntroducido">
            <input type="hidden" name="cadenaNumero" value=<?php echo "\"$cadenaNumero\""; ?>>
            <input type="hidden" name="numerosEnviados" value= <?php echo "\"$numerosEnviados\""; ?>>
            <input type="submit" value="Enviar número">
        </form>
        <?php
        }
        ?>
          
    </body>
</html>



