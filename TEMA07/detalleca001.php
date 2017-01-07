<?php
    session_start();            
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
            <h1>Casco stormtrooper</h1>
            <a href="ejercicio06.php" id="volver">volver</a>         
        </header>
        <main>
            <img src="casco.jpg">
            <div id="descripcion">
                <h2>casco stormtrooper</h2>
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
            </div>
            <form action="ejercicio06.php" method="get" id="comprar">
                <input type="hidden" name="codProducto" value="ca001">
                <input type="submit" value="Comprar">
            </form>             
        </main>
    </body>
</html>

