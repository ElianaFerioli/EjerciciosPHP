<?php
    session_start();
            if(!isset($_SESSION['productos'])){
                $_SESSION['productos'] = array(
                    "es001" => ['Nombre' => 'Espada Laser', 'PVP'=>50, 'imagen' => 'espadaLaser.jpg', 'Novedad' => 'no', 'Oferta' => 'no'],
                    "an001" => ['Nombre' => 'Androide', 'PVP'=>180, 'imagen' => 'androide.jpg', 'Novedad' => 'no', 'Oferta' => 'si'],
                    "ca001" => ['Nombre' => 'Casco', 'PVP'=>100, 'imagen' => 'casco.jpg', 'Novedad' => 'si', 'Oferta' => 'no'],
                    "ar001" => ['Nombre' => 'Arma de Fuego', 'PVP'=>200, 'imagen' => 'armaDeFuego.jpg', 'Novedad' => 'si', 'Oferta' => 'si'],                    
                );
                $_SESSION['carrito'] = [];
                $_SESSION['pvp'] = 0;
            } else {
                if(isset($_GET["vaciarCarrito"])){
                 session_destroy();
                 header("refresh: 0;");
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
                    if(isset($_GET['cuponDescuento'])){
                           $codigoRecogido = $_GET['cuponDescuento'];
                        if($codigoRecogido=="1234"){
                            $_SESSION['pvp'] = $_SESSION['pvp'] - 10;
                        }
                    }
                }
                if(isset($_GET['filtro'])){
                    $filtro = true;
                    $tipoFiltro = $_GET['filtro'];
                } else {
                    $filtro = false;
                }
            }       
    ?>
<!DOCTYPE html>
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
            #ordenar{
                position: absolute;
                top: 170px;
                left: 20px;
                margin: 0px;
                padding: 0px;
            }
           #ordenar form {
                display: inline-block;
            }
           #ordenar  form input[type="submit"]{
                background-color: black;
                border: 2px solid yellow;
                color: yellow;
                border-radius: 10%;
                font-weight: bold;
                padding: 5px;
                
            }
            #ordenar  form input[type="submit"]:hover{
                background-color: yellow;
                border: 2px solid black;
                color: black;
                cursor: pointer;
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
                    <form action="vaciarCarrito.php" method="get" id="vaciarCarrito">
                        <input type="submit" value="vaciar Carrito">
                    </form>
                    <form action="index.php" method="get" id="cuponDescuento">
                        Codigo promocional<br>
                        <input type="text" placeholder="Introduzca codigo" name="cuponDescuento" >
                        <input type="submit" value="Ok">
                    </form>
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
                    <form id="eliminarLaser" class="eliminar" action="./eliminarProducto.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="es001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarAndroide" class="eliminar" action="./eliminarProducto.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="an001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarCasco" class="eliminar" action="./eliminarProducto.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="ca001">
                        <input type="submit" value="-">
                    </form>
                    <form id="eliminarArma" class="eliminar" action="./eliminarProducto.php" method="get">
                        <input type="hidden" name="codigoProductoEliminado" value="ar001">
                        <input type="submit" value="-">
                    </form>
                </div>
            </div>
            <form   id="finalizar" action="./finalizarPedido.php" method="get">
                    <input type="submit" value="finalizar compra">
             </form>
            <div id="ordenar">
                <form  action="./index.php" method="get">
                    <input type="hidden"  name="filtro" value="ofertas">
                    <input type="submit" value="Ofertas">
                </form>
                <form  action="./index.php" method="get">
                    <input type="hidden"  name="filtro" value="novedades">
                    <input type="submit" value="Novedades">
                </form>
            </div>
        </header>
        <main>
            <?php
                if($filtro){
                    if($tipoFiltro=="novedades"){
                         foreach($_SESSION['productos'] as $key => $value) {
                            if($value['Novedad']=="si"){
                                echo "<form class=\"producto\" id=\"", $key, "\" action=\"./index.php\" method=\"get\">";
                                echo "<a class=\"detalle\" href=\"./detalle.php?codigo=",$key ,"\">";                    
                                echo "<img src=\"", $value['imagen'], "\" title=\"Detalle\">";
                                echo "</a>";
                                echo "<p>", $value['Nombre'], "</p>";
                                echo "<h4>", $value['PVP'], " Euros</h4>";
                                echo "<input type=\"hidden\" name=\"codProducto\" value=\"", $key, "\">";
                                echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
                                echo "<input type=\"submit\" value=\"Comprar\">";
                                echo "</form>";
                            }                            
                        }                        
                    } else {
                        foreach($_SESSION['productos'] as $key => $value) {
                            if($value['Oferta']=="si"){
                                echo "<form class=\"producto\" id=\"", $key, "\" action=\"./index.php\" method=\"get\">";
                                echo "<a class=\"detalle\" href=\"./detalle.php?codigo=",$key ,"\">";                    
                                echo "<img src=\"", $value['imagen'], "\" title=\"Detalle\">";
                                echo "</a>";
                                echo "<p>", $value['Nombre'], "</p>";
                                echo "<h4>", $value['PVP'], " Euros</h4>";
                                echo "<input type=\"hidden\" name=\"codProducto\" value=\"", $key, "\">";
                                echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
                                echo "<input type=\"submit\" value=\"Comprar\">";
                                echo "</form>";
                            }                            
                        }  
                    }                 
                } else {
                    foreach($_SESSION['productos'] as $key => $value) {
                        echo "<form class=\"producto\" id=\"", $key, "\" action=\"./index.php\" method=\"get\">";
                        echo "<a class=\"detalle\" href=\"./detalle.php?codigo=",$key ,"\">";                    
                            echo "<img src=\"", $value['imagen'], "\" title=\"Detalle\">";
                        echo "</a>";
                        echo "<p>", $value['Nombre'], "</p>";
                        echo "<h4>", $value['PVP'], " Euros</h4>";
                        echo "<input type=\"hidden\" name=\"codProducto\" value=\"", $key, "\">";
                        echo "<input type=\"hidden\" name=\"accion\" value=\"comprar\">";
                        echo "<input type=\"submit\" value=\"Comprar\">";
                        echo "</form>";
                    }
                }                
            ?>            
        </main>        
    </body>
</html>