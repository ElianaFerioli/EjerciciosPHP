<!DOCTYPE html>
<!--
Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
en español y dará la correspondiente traducción en inglés.
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
        <script>
            function aparecePalabra(palabraUsuario, traduccion){
                var tdPalabra = document.getElementById(palabraUsuario);
                tdPalabra.innerHTML = traduccion;
            }
        </script>       
    </head>
    <body>
        <p>Crea un mini-diccionario español-inglés que contenga, al menos, 20 palabras (con su traducción).
            Utiliza un array asociativo para almacenar las parejas de palabras. El programa pedirá una palabra
            en español y dará la correspondiente traducción en inglés.</p>
        <table>
            <tr><th>Español</th><th>Inglés</th></tr>
            <tr><td>Mamá</td><td id="mamá"></td></tr>
            <tr><td>Papá</td><td id="papá"></td></tr>
            <tr><td>Hermana</td><td id="hermana"></td></tr>
            <tr><td>Hermano</td><td id="hermano"></td></tr>
            <tr><td>Perro</td><td id="perro"></td></tr>
            <tr><td>Gato</td><td id="gato"></td></tr>
            <tr><td>Pez</td><td id="pez"></td></tr>
            <tr><td>Mesa</td><td id="mesa"></td></tr>
            <tr><td>Silla</td><td id="silla"></td></tr>
            <tr><td>Brazo</td><td id="brazo"></td></tr>
            <tr><td>Cabeza</td><td id="cabeza"></td></tr>
            <tr><td>Ojo</td><td id="ojo"></td></tr>
            <tr><td>Pierna</td><td id="pierna"></td></tr>
            <tr><td>Mano</td><td id="mano"></td></tr>
            <tr><td>Nariz</td><td id="nariz"></td></tr>
            <tr><td>Cara</td><td id="cara"></td></tr>
            <tr><td>Coche</td><td id="coche"></td></tr>
            <tr><td>Moto</td><td id="moto"></td></tr>
            <tr><td>Casa</td><td id="casa"></td></tr>
            <tr><td>Hogar</td><td id="hogar"></td></tr>
        </table>
        <form action="ejercicio11.php" method="get">
            Por favor, introduzca la palabra que quiere traducir: 
            <input type="text" name="palabraUsuario">
            <input type="submit" value="Traducir">
        </form>
        <?php
            if(isset($_GET['palabraUsuario'])){
                $palabraUsuario = $_GET['palabraUsuario'];
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
                
                foreach ($diccionario as $key => $vaue){
                    if($key==$palabraUsuario){
                        echo "<script>aparecePalabra('", strtolower($palabraUsuario), "','", $diccionario[$palabraUsuario], "');</script>";
                    }
                }
            }
        ?>
    </body>
</html>

