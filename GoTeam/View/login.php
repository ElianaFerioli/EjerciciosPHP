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
        <link rel="stylesheet" type="text/css" href="../View/css/estiloLogin.css">
    </head>
    <body>
        <?php
            if($failUser){
        ?>
            <p>Usuario incorrecto, por favor vuelva a intentarlo</p>
        <?php
            } else if($failPass) {
        ?>
            <p>Contraseña incorrecta, por favor vuelva a intentarlo</p>
        <?php
            }
        ?>
        <form action="../Controller/recuperacionLoginUsuario.php" method="get">
            <input type="text" placeholder="Nombre de Usuario" size="10" name="nomUsuario">
            <br>
            <input type="password" placeholder="Contraseña" size="10" name="passUsuario">
            <br>
            <input type="submit" value="Entrar">
            <br>
            <a href="./registroNuevoUsuario.php">Registrarse</a>
        </form>        
    </body>
</html>
