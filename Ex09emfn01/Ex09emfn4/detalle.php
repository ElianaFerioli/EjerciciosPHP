<?php
    session_start();
    $codProd = $_GET['codigo'];
    if($codProd=="es001"){
        $nombre  = "Espada Laser";
        $imagen = "espadaLaser.jpg";
    } else if ($codProd=="an001"){
        $nombre  = "Androide bb8";
        $imagen = "androide.jpg";
    } else if ($codProd=="ca001"){
        $nombre  = "Casco stormtrooper";
        $imagen = "casco.jpg";
    } else if ($codProd=="ar001"){
        $nombre  = "Arma laser";
        $imagen = "armaDeFuego.jpg";
    }
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
        <link rel="stylesheet" type="text/css" href="./estiloEjercicio05.css">
        <style>
            img {
                margin-top: 5%;
                margin-left: 8%;
                width: 400px;
                height: 400px;
                border: 2px solid yellow;
                border-radius: 10%;
            }
            #descripcion {
                position: absolute;
                top: 250px;
                left: 650px;
                width: 550px;
                height: 300px;
                color: yellow;
                overflow-x: hidden;
                overflow-y: scroll;
                transform: perspective(500px) rotateX(25deg);
                text-align: center;
            }
            p, h2{
                color: yellow;
            }
            a#volver{
                position: absolute;
                top: 30px;
                left: 1100px;
            }
            #volver{
                width: 130px;
                height: 50px;
                padding-top: 20px;
                font-size: 14px;
                font-weight: bold;
                background-color: black;
                color: yellow;
                border: none;
                border-radius: 10%;
                font-family: "STJEDISE";
                text-align: center;
                text-decoration: none;
                
            }
                #volver:hover{
                    background-color: yellow;
                    color: black;
                    border: 1px solid black;
                    cursor: pointer;
                }
            form#comprar{
                position: absolute;
                top: 600px;
                left: 890px;
            }
            #comprar input{
                width: 130px;
                height: 50px;
                font-size: 14px;
                font-weight: bold;
                background-color: yellow;
                color: black;
                border: none;
                border-radius: 10%;
                font-family: "STJEDISE";
            }
                #comprar input:hover{
                    background-color: black;
                    color: yellow;
                    border: 1px solid yellow;
                    cursor: pointer;
                }
        </style>
    </head>
    <body>
        <header>
            <img src="./header.png" id="cabecera">
            <h1><?php echo $nombre; ?></h1>
            <a href="index.php" id="volver">volver</a>         
        </header>
        <main>
            <img src="<?php echo $imagen; ?>">
            <div id="descripcion">
                <h2><?php echo $nombre; ?></h2>
                <?php if($codProd == "es001") {                    
                ?>
                <p>Con este sable láser, los luchadores de Star Wars pueden batirse en duelo con sus oponentes 
                    frikis. Eso si, si compras este producto jamás tendras novia. Es ideal para jugar en interiores y exteriores
                    aunque en el espacio no hay oxígeno así que morirás. El sable láser forma parte del sistema de 
                    BladeBuilders de sables láser personalizables. 
                    ¡Prepárate para la acción y la aventura en una remota galaxia con los Frikis de tu barrio!
                    <ul>
                        <li>No incluye sable láser.</li>
                        <li>No se ilumina.</li>
                        <li>No funciona</li>
                    </ul>
                </p>
               <?php 
                }
                if($codProd=="an001"){
                ?>
                <p>
                    Es una réplica del droide BB-8 que aparece en Star Wars: The Force Awakens. 
                    Puede rodar y ponerse en equilibrio por sí mismo, incluso mejor tú.
                    Si quieres conseguir ser el hazmereir de tu colegio no puedes perderte este producto.
                    Ya podrás ir por ahí contando que tus padres no quieren comprarte un perro.
                    Es la nueva era de los Tamagochi.
                    <ul>
                        <li>No se mueve.</li>
                        <li>No habla.</li>
                        <li>No funciona.</li>
                    </ul>
                </p>
                <?php 
                }
                if($codProd=="ca001"){
                ?>
                <p>Si quieres ser el personaje más chulo sobre una moto de 49cc, no puedes perderte este producto.
                   compuesto de un plástico muy endeble. Sirve solo para juntar polvo y, eventualmente, para pisar papeles
                   (siempre y cuando no haga mucho viento).
                   Además, podrás usarlo para trabar la puerta así corre el aire.
                    <ul>
                        <li>No se puede respirar dentro.</li>
                        <li>Disponible solo en talla xxxxs.</li>
                        <li>No funciona como sombrero</li>
                    </ul>
                </p>
                <?php 
                }
                if($codProd=="ar001"){
                ?>
                 <p>Juguete ideal para niños menores de 3 años. Con esta arma no podrás hacer daño a nadie
                    pero aprenderán a respetarte desde pequeño.
                    Tiene un cascabel dentro que simula el sonido de la recarga de cartuchos laser.
                    Juguete prohibido en estados unidos (hasta que gane Trump).
                    <ul>
                        <li>No es arma.</li>
                        <li>No es laser.</li>
                        <li>No funciona.</li>
                        <li>Puede explotar espontáneamente.</li>
                    </ul>
                </p>
                <?php
                }
                ?>
            </div>
            <form action="index.php" method="get" id="comprar">
                <input type="hidden" name="codProducto" value="<?php echo $codProd; ?>">
                <input type="submit" value="Comprar">
            </form>             
        </main>
    </body>
</html>
