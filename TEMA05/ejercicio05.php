<!DOCTYPE html>
<!--
Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
del diagrama se pueden dibujar a base de la concatenación de una imagen.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            div{
                height: 10px;
                border: 1px solid black;
                position: relative;
            }
        </style>
        
    </head>
    <body>
        <p>Realiza un programa que pida la temperatura media que ha hecho en cada mes de un determinado
            año y que muestre a continuación un diagrama de barras horizontales con esos datos. Las barras
            del diagrama se pueden dibujar a base de la concatenación de una imagen.</p>
        <?php
            if(!isset($_GET['1'])) {
        ?>
        <form method="get" action="ejercicio05.php">
            Temperatura media en Enero:
            <input type="number" name="1"  max=50>
            <br>
            Temperatura media en Febrero:
            <input type="number" name="2"  max=50>
            <br>
            Temperatura media en Marzo:
            <input type="number" name="3"  max=50>
            <br>
            Temperatura media en Abril:
            <input type="number" name="4"  max=50>
            <br>
            Temperatura media en Mayo:
            <input type="number" name="5"  max=50>
            <br>
            Temperatura media en Junio:
            <input type="number" name="6"  max=50>
            <br>
            Temperatura media en Julio:
            <input type="number" name="7"  max=50>
            <br>
            Temperatura media en Agosto:
            <input type="number" name="8"  max=50>
            <br>
            Temperatura media en Septiembre:
            <input type="number" name="9"  max=50>
            <br>
            Temperatura media en Octubre:
            <input type="number" name="10"  max=50>
            <br>
            Temperatura media en Noviembre:
            <input type="number" name="11"  max=50>
            <br>
            Temperatura media en Diciembre:
            <input type="number" name="12"  max=50>
            <br>
            <input type="submit" value="Enviar temperaturas">
        </form>
        <?php
            } else {
                $meses = array("ENERO", "FEBRERO", "MARZO", "ABRIL", "MAYO", "JUNIO", "JULIO", "AGOSTO", "SEPTIEMBRE", "OCTUBRE", "NOVIEMBRE", "DICIEMBRE");
                //asigna las temperaturas a un array
                for($x = 1; $x <=12; $x++){
                    $temperaturas[$x-1] = $_GET[$x];
                }
                //los muestra como diagrama de barras
                for($x = 0; $x < 12; $x++){
                    if($temperaturas[$x]>=30){
                        $background = "red";
                        echo "$meses[$x]: <div style=\"left:500px; width:".(abs($temperaturas[$x])*10)."px; background-color: $background;\"></div>";
                    } else if(($temperaturas[$x]<30)&&($temperaturas[$x]>=20)){
                        $background = "orange";
                        echo "$meses[$x]: <div style=\"left:500px; width:".(abs($temperaturas[$x])*10)."px; background-color: $background;\"></div>";
                    }else if(($temperaturas[$x]<20)&&($temperaturas[$x]>=10)){
                        $background = "yellow";
                        echo "$meses[$x]: <div style=\"left:500px; width:".(abs($temperaturas[$x])*10)."px; background-color: $background;\"></div>";
                    }else if(($temperaturas[$x]<10)&&($temperaturas[$x]>=0)){
                        $background = "blue";
                        echo "$meses[$x]: <div style=\"left:500px; width:".(abs($temperaturas[$x])*10)."px; background-color: $background;\"></div>";
                    }else if($temperaturas[$x]<0){
                        $background = "black";
                        echo "$meses[$x]: <div style=\"left:".(500-(abs($temperaturas[$x])*10))."px; width:".(abs($temperaturas[$x])*10)."px; background-color: $background;\"></div>";
                    }                    
                }
            }
        ?>
    </body>
</html>

