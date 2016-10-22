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
            <h1>Androide bb8</h1>
            <a href="ejercicio06.php" id="volver">volver</a>         
        </header>
        <main>
            <img src="androide.jpg">
            <div id="descripcion">
                <h2>Androide bb8</h2>
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
            </div>
            <form action="ejercicio06.php" method="get" id="comprar">
                <input type="hidden" name="codProducto" value="an001">
                <input type="submit" value="Comprar">
            </form>             
        </main>
    </body>
</html>
