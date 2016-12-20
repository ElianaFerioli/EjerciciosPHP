<?php
    if(isset($_SESSION['nomUsuario'])){
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
        <link rel="stylesheet" type="text/css" href="../View/css/estiloIndexUsuario.css">
    </head>
    <body>
        <?php
            echo "hola soy ".$_SESSION['nomUsuario'];
        ?>
    </body>
</html>
<?php
    } else {
        include '../View/login.php';
    }
?>
