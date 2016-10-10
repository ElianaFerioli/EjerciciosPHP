<!--
Escribe un programa que pida por teclado un día de la semana y que diga qué asignatura toca a
primera hora ese día.
-->

<?php 
    
    $dia = strtolower($_GET['dia']);
    $asignatura = "";
    $error = false;
    switch($dia){
        case("lunes"):
            $asignatura = "EMPRESA E INICIATIVA EMPRENDEDORA";
            break;
        case("martes"):
            $asignatura = "INTERFACES";
            break;
        case("miercoles"):
            $asignatura = "DESARROLLO WEB EN ENTORNO CLIENTE";
            break;
        case("jueves"):
            $asignatura = "DESARROLLO WEB EN ENTORNO SERVIDOR";
            break;
        case("viernes"):
            $asignatura = "DESARROLLO WEB EN ENTORNO CLIENTE";
            break;
        default:
            $error = true;
            break;        
    }
    if($error) {
        echo "Día incorrecto";
    } else {
        echo "El día $dia a 1º hora, se imparte la asignatura $asignatura.";
    }
    ?>


