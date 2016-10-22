<?php
    session_start();
            if(isset($_SESSION['nomUsuario'])&&isset($_SESSION['password'])){
                $_SESSION['nomUsuario'] = $_GET['nomUsuario'];
                $_SESSION['password'] = $_GET['password'];                
            } else {
                $_SESSION['nomUsuario'] = "";
                $_SESSION['password'] = "";
            }            
    ?>
<!DOCTYPE html>
<!--
Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
con un nombre de usuario y contraseña correctos.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <?php
        
            if($_SESSION['nomUsuario']=="eli"||$_SESSION['password']=="1234"){
                echo "<meta http-equiv=\"refresh\" content=\"0;url=./ajedrez.php\">";
            }
        ?>
        <title></title>
    </head>
    <body>
        <p>Establece un control de acceso mediante nombre de usuario y contraseña para cualquiera de los
            programas de la relación anterior. La aplicación no nos dejará continuar hasta que iniciemos sesión
            con un nombre de usuario y contraseña correctos.</p>
        <?php
            if(isset($_GET['nomUsuario'])) {
                if("eli"!=$_SESSION['nomUsuario']||"1234"!=$_SESSION['password']){
                    echo "<p><b>Nombre de Usuario o contraseña incorrecta, inténtelo de nuevo.</b></p>";
                }
            }            
        ?>        
        <h1>Ejercicio del AJedrez</h1>
        <form action="ejercicio04.php" methid="get">
            Nombre de Usuario: 
            <input type="text" name="nomUsuario"><br>
            Contreaseña:
            <input type="password" name="password"><br>
            <input type="submit" value="Login">  
        </form>
    </body>
</html>
