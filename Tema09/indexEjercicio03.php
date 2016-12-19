<?php
    include_once './clasesEjercicio03/DadoPoker.php';
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>Muestra las tiradas totales</h1>
        <?php
            echo "Se han tirado ".DadoPoker::getTiradasTotales()." dados.";
        ?>
        <h1>Crea el cubilete con los dados</h1>
        <?php
            $cubilete = [];
            echo "<ul>";
            for($x = 0; $x < 5; $x++){
                $cubilete[$x] = new DadoPoker();
                echo "<li>Dado".$x."</li>";
            }
            echo "</ul>";
            //print_r($cubilete);
        ?>
        <h1>Tira el cubilete</h1>
        <?php
            echo "<ul>";
            for($x = 0; $x < 5; $x++){
                $cubilete[$x]->nombreFigura();
                echo "<li>Dado".$x."= ".$cubilete[$x]->getCara()."</li>";
            }
            echo "</ul>";
            //print_r($cubilete);
        ?>
        <h1>Muestra las tiradas totales</h1>
        <?php
            echo "Se han tirado ".DadoPoker::getTiradasTotales()." dados.";
        ?>
    </body>
</html>
