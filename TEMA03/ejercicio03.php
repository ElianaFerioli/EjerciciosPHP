<!--
Escribe un programa en que dado un número del 1 a 7 escriba el correspondiente nombre del día
de la semana.
-->

<?php 
    
    $numero = $_GET['numero'];
    $mensaje = "";
    switch($numero){
        case("1"):
            $mensaje = "lunes.";
            break;
        case("2"):
           $mensaje = "martes.";
            break;
        case("3"):
            $mensaje = "miercoles.";
            break;
        case("4"):
            $mensaje = "jueves.";
            break;
        case("5"):
            $mensaje = "viernes.";
            break;
        case("6"):
            $mensaje = "sábado.";
            break;
        case("7"):
            $mensaje = "domingo.";
            break;
        default:
            break;        
    }
    echo "El día de la semana es $mensaje";
    ?>

