<?php
    session_start();
    include_once './clasesEjercicio04/Zona.php';
    if(!isset($_SESSION['salaPrincipal'])){
        $_SESSION['salaPrincipal'] = serialize(new Zona("Sala Princial", 1000));
        $_SESSION['compraVenta'] =  serialize(new Zona("Compra-venta", 200));
        $_SESSION['zonaVip'] = serialize(new Zona("Zona VIP", 25));
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
    </head>
    <body>
        <h1>Zonas disponibles</h1>
        <?php                        
            if($_GET['compra']!="true"){
            $salaPrincipal = unserialize($_SESSION['salaPrincipal']);   
            $compraVenta = unserialize($_SESSION['compraVenta']);
            $vip = unserialize($_SESSION['zonaVip']);
            echo $salaPrincipal;
            echo "<br>";
            echo $compraVenta;
            echo "<br>";
            echo $vip;
            echo "<br>";
        ?>
        <h3>Comprar entradas</h3>        
        <form action="./indexEjercicio04.php" method="get">
            ¿En que zona quieres las entradas?
            <br>
            <select name="zona" required>
                <option selected="selected" disabled>--Zona--</option>
                <option value="salaPrincipal">Sala Principal</option>
                <option value="compraVenta">Compra-venta</option>
                <option value="zonaVip">Zona VIP</option>
            </select>
            <br>
            ¿Cuantas entradas quieres?
            <br>
            <input type="number" min="0" max="1000" placeholder="0" required name="numeroEntradas">
            <br>
            <input type="hidden" name="compra" value="true">
            <input type="submit" value="Comprar entradas">
        </form>
        <?php
            $_SESSION['salaPrincipal'] = serialize($salaPrincipal);
            $_SESSION['compraVenta'] =  serialize($compraVenta);
            $_SESSION['zonaVip'] = serialize($vip);
            } else {
        ?>
        <?php
                $x = $_GET['zona'];
                $sala = unserialize($_SESSION["$x"]);
                echo $_GET['numeroEntradas'];
                echo $sala->vender($_GET['numeroEntradas']);
                $_SESSION["$x"] = serialize($sala);
        ?>
        <br>
        <a href="./indexEjercicio04.php?compra=false">Volver a la página principal</a>
        <?php
            }
        ?>
    </body>
</html>
