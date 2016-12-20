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
    </head>
    <body>
            ¿Está seguro que quiere eliminar el producto?
            <form action="index.php" method="get">
                <input type="hidden" name="codigoProductoEliminado" value="<?php echo $_GET['codigoProductoEliminado']; ?>">
                <input type="submit" value="si">
            </form>
            <form action="index.php" method="get">
                <input type="submit" value="no">
            </form>
    </body>
</html>

