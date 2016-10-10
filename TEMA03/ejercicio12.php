<!--
Realiza un minicuestionario con 10 preguntas tipo test sobre las asignaturas que se imparten en
el curso. Cada pregunta acertada sumará un punto. El programa mostrará al final la calificación
obtenida. Pásale el minicuestionario a tus compañeros y pídeles que lo hagan para ver qué tal andan
de conocimientos en las diferentes asignaturas del curso.
-->

<?php 
    
    $p1 = $_GET['pregUno'];
    $p2 = $_GET['pregDos'];
    $p3 = $_GET['pregTres'];
    $p4 = $_GET['pregCuatro'];
    $p5 = $_GET['pregCinco'];
    $p6 = $_GET['pregSeis'];
    $p7 = $_GET['pregSiete'];
    $p8 = $_GET['pregOcho'];
    $p9 = $_GET['pregNueve'];
    $p10 = $_GET['pregDiez'];
    $puntuacion = "";
    
    
    if($p1=="a"){
        $puntuacion++;
    }
    if($p2=="b"){
        $puntuacion++;
    }
    if($p3=="c"){
        $puntuacion++;
    }
    if($p4=="c"){
        $puntuacion++;
    }
    if($p5=="b"){
        $puntuacion++;
    }
    if($p6=="b"){
        $puntuacion++;
    }
    if($p7=="c"){
        $puntuacion++;
    }
    if($p8=="b"){
        $puntuacion++;
    }
    if($p9=="a"){
        $puntuacion++;
    }
    if($p10=="c"){
        $puntuacion++;
    }    
    echo "La calificación final es $puntuacion.";   
    ?>
