<!DOCTYPE html>
<!--
Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
y cuántas erróneas.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <style>
            table, td, th, tr{
                border: 1px solid black;
            }
        </style>    
    </head>
    <body>
        <p>Realiza un programa que escoja al azar 5 palabras en español del mini-diccionario del ejercicio
            anterior. El programa pedirá que el usuario teclee la traducción al inglés de cada una de las palabras
            y comprobará si son correctas. Al final, el programa deberá mostrar cuántas respuestas son válidas
            y cuántas erróneas.</p>
        <?php
            if(!isset($_GET['traduccion0'])){
                $diccionario = [ "Mamá" => "Mother",
                                 "Papá" => "Father",
                                 "Hermana" => "Sister",
                                 "Hermano" => "Brother",
                                 "Perro" => "Dog",
                                 "Gato" => "Cat",
                                 "Pez" => "Fish",
                                 "Mesa" => "Table",
                                 "Silla" => "Chair",
                                 "Brazo" => "Arm",
                                 "Cabeza" => "Head",
                                 "Ojo" => "Eye",
                                 "Pierna" => "Leg",
                                 "Mano" => "Hand",
                                 "Nariz" => "Nose",
                                 "Cara" => "Face",
                                 "Coche" => "Car",
                                 "Moto" => "Bike",
                                 "Casa" => "House",
                                 "Hogar" => "Home"];
            
            echo "<form action=\"ejercicio12.php\" method=\"get\">";
            for($x = 0; $x < 5; $x++){
                //Corrobora que no se repitan
                $alea = rand(1, 20);
                while(in_array($alea, $arrayAleatorio)){
                    $alea = rand(1, 20);
                }
                $arrayAleatorio[$x] = $alea;
                //Elije la palabra
                switch($alea){
                    case 1:
                        echo "Traduce la palabra Mamá";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Mother";
                        break;
                    case 2:
                        echo "Traduce la palabra Papá";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Father";
                        break;
                    case 3:
                        echo "Traduce la palabra Hermana";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Sister";
                        break;
                    case 4:
                        echo "Traduce la palabra Hermano";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Brother";
                        break;
                    case 5:
                        echo "Traduce la palabra Perro";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Dog";
                        break;
                    case 6:
                        echo "Traduce la palabra Gato";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Cat";
                        break;
                    case 7:
                        echo "Traduce la palabra Pez";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Fish";
                        break;
                    case 8:
                        echo "Traduce la palabra Mesa";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Table";
                        break;
                    case 9:
                        echo "Traduce la palabra Silla";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Chair";
                        break;
                    case 10:
                        echo "Traduce la palabra Brazo";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Arm";
                        break;
                    case 11:
                        echo "Traduce la palabra Cabeza";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Head";
                        break;
                    case 12:
                        echo "Traduce la palabra Ojo";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Eye";
                        break;
                    case 13:
                        echo "Traduce la palabra Pierna";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Leg";
                        break;
                    case 14:
                        echo "Traduce la palabra Mano";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Hand";
                        break;
                    case 15:
                        echo "Traduce la palabra Nariz";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Nose";
                        break;
                    case 16:
                       echo "Traduce la palabra Cara";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Face";
                        break;
                    case 17:
                        echo "Traduce la palabra Coche";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Car";
                        break;
                    case 18:
                        echo "Traduce la palabra Moto";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Bike";
                        break;
                    case 19:
                        echo "Traduce la palabra Casa";
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."House";
                        break;
                    case 20:
                        echo "Traduce la palabra Hogar";    
                        echo "<input type=\"text\" name=\"traduccion$x\"><br>";
                        $cadenaCorrectas = $cadenaCorrectas." "."Home";
                        break;
                }
                
            }
            echo "<input type=\"hidden\" name=\"cadenaCorrectas\" value=\"$cadenaCorrectas\">";
            echo "<input type=\"submit\" value=\"Ok\">";
            echo "</form>";
            } else {
                for($x = 0; $x < 5; $x++){
                    $cadenaTraducciones = $cadenaTraducciones." ".$_GET["traduccion$x"];
                    
                }
                $cadenaCorrectas = $_GET["cadenaCorrectas"];
                //explota las cadenas
                $cadenaTraducciones = substr($cadenaTraducciones, 1);
                $cadenaTraducciones = explode(" ", $cadenaTraducciones);
                $cadenaCorrectas = substr($cadenaCorrectas, 1);
                $cadenaCorrectas = explode(" ", $cadenaCorrectas);
                $puntuacion = 0;                
                //comprueba las coincidencias
                for($x=0; $x < 5; $x++){
                    echo "hola";
                    if(strtolower($cadenaTraducciones[$x])==strtolower($cadenaCorrectas[$x])){
                        $puntuacion++;
                    }
                }
                echo "<br>La puntuación obtenida es: $puntuacion";
                
            }            
        ?>
        
    </body>
</html>

