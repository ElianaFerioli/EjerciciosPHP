<?php
    require_once 'app/start.php';
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
        <h2>PHP Facebook SDK</h2>
        <?php
            if(!isset($_SESSION['facebook'])){
        ?>
            <a href="<?php echo $helper->getLoginUrl($config['scopes']); ?>">Log in with Facebook!</a>
        <?php               
            } else {
        ?>
            <p>
                Bienvenido <?php echo $facebook_user->getName(); ?>
            </p>
            <a href="app/logout.php">Cerrar sesión</a>
        <?php               
            }
        ?>
    </body>
</html>
