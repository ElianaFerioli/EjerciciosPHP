<!--
Realiza un programa que nos diga si hay probabilidad de que nuestra pareja nos está siendo
infiel. El programa irá haciendo preguntas que el usuario contestará con verdadero o falso. Puedes
utilizar radio buttons. Cada pregunta contestada como verdadero sumará 3 puntos. Las preguntas
contestadas con falso no suman puntos. Utiliza el fichero test_infidelidad.txt2 para obtener las
preguntas y las conclusiones del programa.
-->

<?php 
    
    $uno = $_GET['pregUno'];
    $dos = $_GET['pregDos'];
    $tres = $_GET['pregTres'];
    $cuatro = $_GET['pregCuatro'];
    $cinco = $_GET['pregCinco'];
    $seis = $_GET['pregSeis'];
    $siete = $_GET['pregSiete'];
    $ocho = $_GET['pregOcho'];
    $nueve = $_GET['pregNueve'];
    $diez = $_GET['pregDiez'];
    
    $contador = 0;
    if($uno == "v"){
        $contador = $contador + 3;
    }
    if($dos == "v"){
        $contador = $contador + 3;
    }
    if($tres == "v"){
        $contador = $contador + 3;
    }
    if($cuatro == "v"){
        $contador = $contador + 3;
    }
    if($cinco == "v"){
       $contador = $contador + 3;
    }
    if($seis == "v"){
        $contador = $contador + 3;
    }
    if($siete == "v"){
        $contador = $contador + 3;
    }
    if($ocho == "v"){
        $contador = $contador + 3;
    }
    if($nueve == "v"){
        $contador = $contador + 3;
    }
    if($diez == "v"){
        $contador = $contador + 3;
    }
    
    if (($contador > 0)&&($contador <= 10)) {
        echo "¡Enhorabuena! tu pareja parece ser totalmente fiel.";
    } else if (($contador > 10)&&($contador <= 22)){
        echo "Quizás exista el peligro de otra persona en su vida o en su mente, aunque seguramente será algo sin importancia. No bajes la guardia.";
    } else if ($contador > 22) {
        echo "Tu pareja tiene todos los ingredientes para estar viviendo un romance con otra persona. Te aconsejamos que indagues un poco más y averigues que es lo que está pasando por su cabeza.";
    }
    
    
    
    ?>


