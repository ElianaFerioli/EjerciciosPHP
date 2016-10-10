<!--
Escribe un programa que ordene tres números enteros introducidos por teclado.
-->

<?php 
    
    $numUno = $_GET['numUno'];
    $numDos = $_GET['numDos'];
    $numTres = $_GET['numTres'];
    if(($numUno<$numDos)&&($numUno<$numTres)) {
        if($numDos>$numTres){
            $aux = $numDos;
            $numDos = $numTres;
            $numTres = $aux;
        }
    } else if(($numDos<$numUno)&&($numDos<$numTres)){
        $aux = $numUno;
        $numUno = $numDos;
        if($aux < $numTres){
            $numDos = $aux;
        } else {
            $numDos = $numTres;
            $numTres = $aux;
        }
    } else if (($numTres<$numUno)&&($numTres<$numDos)){
        $aux = $numUno;
        $numUno = $numTres;
        if($aux < $numDos){
            $numTres = $numDos;
            $numDos = $aux;
        } else {
            $numTres = $aux;
        }
    }
    
    echo "El orden correcto es $numUno $numDos y $numTres";
       
    ?>

