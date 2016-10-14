<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del
nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
cogido de una baraja de verdad.
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
        <p>Realiza un programa que escoja al azar 10 cartas de la baraja española y que diga cuántos puntos
            suman según el juego de la brisca. Emplea un array asociativo para obtener los puntos a partir del
            nombre de la figura de la carta. Asegúrate de que no se repite ninguna carta, igual que si las hubieras
            cogido de una baraja de verdad.</p>
        <?php
            $baraja = array("as" => 11, "dos" => 0, "tres" => 10, "cuatro" => 0, "cinco" => 0, "seis" => 0, "siete" => 0, "ocho" => 0, "nueve" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
            //elije las cartas
            for($x = 0; $x < 10; $x++){
                $random = rand(1, 12);
                //Corrobora que no se repitan
                $alea = rand(1, 20);
                while(in_array($alea, $arrayAleatorio)){
                    $alea = rand(1, 20);
                }
                $arrayAleatorio[$x] = $alea;
                //elije la carta
                $puntuacion;
                echo $x+1, "º";
                switch($random){
                    case 1:
                        echo "El as vale " , $baraja['as'], "<br>";
                        $puntuacion = $puntuacion + $baraja['as'];
                        break;
                    case 2:
                        echo "El dos vale " , $baraja['dos'], "<br>";
                        $puntuacion = $puntuacion + $baraja['dos'];
                        break;
                    case 3:
                        echo "El tres vale " , $baraja['tres'], "<br>";
                        $puntuacion = $puntuacion + $baraja['tres'];
                        break;
                    case 4:
                        echo "El cuatro vale " , $baraja['cuatro'], "<br>";
                        $puntuacion = $puntuacion + $baraja['cuatro'];
                        break;
                    case 5:
                        echo "El cinco vale " , $baraja['cinco'], "<br>";
                        $puntuacion = $puntuacion + $baraja['cinco'];
                        break;
                    case 6:
                        echo "El seis vale " , $baraja['seis'], "<br>";
                        $puntuacion = $puntuacion + $baraja['seis'];
                        break;
                    case 7:
                        echo "El siete vale " , $baraja['siete'], "<br>";
                        $puntuacion = $puntuacion + $baraja['siete'];
                        break;
                    case 8:
                        echo "El ocho vale " , $baraja['ocho'], "<br>";
                        $puntuacion = $puntuacion + $baraja['ocho'];
                        break;
                    case 9:
                        echo "El nueve vale " , $baraja['nueve'], "<br>";
                        $puntuacion = $puntuacion + $baraja['nueve'];
                        break;
                    case 10:
                        echo "La sota vale " , $baraja['sota'], "<br>";
                        $puntuacion = $puntuacion + $baraja['sota'];
                        break;
                    case 11:
                        echo "El caballo vale " , $baraja['caballo'], "<br>";
                        $puntuacion = $puntuacion + $baraja['caballo'];
                        break;
                    case 12:
                        echo "El rey vale " , $baraja['rey'], "<br>";
                        $puntuacion = $puntuacion + $baraja['rey'];
                        break;
                }                
            }
            echo "<br><br><b>El total de la puntuación es $puntuacion.<b>";
        ?>
    </body>
</html>
