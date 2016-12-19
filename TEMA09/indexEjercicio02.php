<?php
    include_once './clasesEjercicio02/Vehiculo.php';
    include_once './clasesEjercicio02/Bicicleta.php';
    include_once './clasesEjercicio02/Coche.php';
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
        <h2>Se crean un coche y una bicibleta</h2>
        <?php
            $bici = new Bicicleta("5");
            $coche = new Coche("Peugeot");
            echo "<ul>";
                echo "<li>";
                    echo $bici;
                echo "</li>";
                echo "<li>";
                    echo $coche;
                echo "</li>";
            echo "</ul>";
        ?>
        <h2>Kilometraje inicial</h2>
        <?php
            echo "<ul>";
                echo "<li>";
                    echo "Bici: ".$bici->getKilometrosRecorridos();
                echo "</li>";
                echo "<li>";
                    echo "Coche: ".$coche->getKilometrosRecorridos();
                echo "</li>";
            echo "</ul>";
        ?>
        <h2>Se ejecuta el método que hace que la bicicleta ande 5km</h2>
        <?php
            echo $bici->recorrer(5);
            echo "El kilometraje de la bicicleta es: ".$bici->getKilometrosRecorridos();
        ?>
        <h2>Se ejecuta el método que hace que la bicicleta haga caballito</h2>
        <?php
            echo $bici->caballito();
        ?>
        <h2>Se ejecuta el método que hace que el coche ande 35km</h2>
        <?php
            echo $coche->recorrer(35);
            echo "El kilometraje del coche es: ".$coche->getKilometrosRecorridos();
        ?>
        <h2>Se ejecuta el método que hace que el coche queme ruedas</h2>
        <?php
            echo $coche->quemarRueda();
        ?>
        <h2>Se ejecuta el método que hace que se vea el kilometraje recorrido gloabal</h2>
        <?php
            echo "El kimetraje total es: ".Vehiculo::getKilometrosTotales();
        ?>
        
        
    </body>
</html>
