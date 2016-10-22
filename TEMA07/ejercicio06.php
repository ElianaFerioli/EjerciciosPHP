<?php
    session_start();
            if(!isset($_SESSION['productos'])){
                $_SESSION['productos'] = array(
                    "es001" => ['Nombre' => 'Espada Laser', 'PVP'=>50, 'imagen' => 'espadaLaser.jpg'],
                    "an001" => ['Nombre' => 'Androide', 'PVP'=>180, 'imagen' => 'androide.jpg'],
                    "ca001" => ['Nombre' => 'Casco', 'PVP'=>100, 'imagen' => 'casco.jpg'],
                    "ar001" => ['Nombre' => 'Arma de Fuego', 'PVP'=>200, 'imagen' => 'armaDeFuego.jpg'],                    
                );
                $_SESSION['carrito'] = [];
                $_SESSION['pvp'] = 0;
            } else {
                $codProd = $_GET['codProducto'];
                $codProdEliminado = $_GET['codigoProductoEliminado'];
                if($codProd!=null){
                    $_SESSION['carrito'][$codProd]++;
                    $_SESSION['pvp'] = $_SESSION['productos'][$codProd]['PVP'] + $_SESSION['pvp'];
                }
                if(($codProdEliminado!=null)&&($_SESSION['carrito'][$codProdEliminado]>0)){
                    $_SESSION['carrito'][$codProdEliminado]--;
                    $_SESSION['pvp'] = $_SESSION['pvp'] - $_SESSION['productos'][$codProdEliminado]['PVP'];
                }
            }       
    ?>
<!DOCTYPE html>
<!--
Amplía el programa anterior de tal forma que se pueda ver el detalle de un producto. Para ello, cada
uno de los productos del catálogo deberá tener un botón Detalle que, al ser accionado, debe llevar
al usuario a la vista de detalle que contendrá una descripción exhaustiva del producto en cuestión.
Se podrán añadir productos al carrito tanto desde la vista de listado como desde la vista de detalle.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" type="text/css" href="./estiloEjercicio05.css">
        <style>
           .producto img:hover {
                width: 198px;
                height: 198px;
                border: 1px solid black;
            }
        </style>
    </head>
    <body>
        <header>
            <img src="./header.png" id="cabecera">
            <h1>Galactic Store</h1>
            <div>
                <img src="./carrito.png" id="carrito">
                <img src="./sablelaser.png" class="item">
                <img src="./bb8.png" class="item">
                <img src="./casco.png" class="item">
                <img src="./arma.png" class="item">
                <div id="total">
                    <h4 id="precioTotal"><?php 
                        if($_SESSION['pvp']>0){
                            echo $_SESSION['pvp'], "€";
                        }                    
                     ?></h4>
                    <h4 id="cantidadLaser"><?php echo $_SESSION['carrito']['es001']; ?></h4>
                    <h4 id="catidadBb8"><?php echo $_SESSION['carrito']['an001']; ?></h4>
                    <h4 id="cantidadCasco"><?php echo $_SESSION['carrito']['ca001']; ?></h4>
                    <h4 id="cantidadArma"><?php echo $_SESSION['carrito']['ar001']; ?></h4>
                    <form id="eliminarLaser" class="eliminar" action="./ejercicio06.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="es001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarAndroide" class="eliminar" action="./ejercicio06.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="an001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarCasco" class="eliminar" action="./ejercicio06.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="ca001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarArma" class="eliminar" action="./ejercicio06.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="ar001">
                        <input type="submit" value="-">
                    </form>
                </div>
            </div>
        </header>
        <main>
            <?php
                foreach($_SESSION['productos'] as $key => $value) {
                    echo "<form class=\"producto\" id=\"", $key, "\" action=\"./ejercicio06.php\" method=\"get\">";
                    echo "<a class=\"detalle\" href=\"./detalle",$key ,".php\" name=\"prodDetalle\" value=\"siii\">";                    
                        echo "<img src=\"", $value['imagen'], "\">";
                    echo "</a>";
                    echo "<p>", $value['Nombre'], "</p>";
                    echo "<h4>", $value['PVP'], " Euros</h4>";
                    echo "<input type=\"hidden\" name=\"codProducto\" value=\"", $key, "\">";
                    echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
                    echo "<input type=\"submit\" value=\"Comprar\">";
                    echo "</form>";
                }
            ?>
        </main>        
    </body>
</html>