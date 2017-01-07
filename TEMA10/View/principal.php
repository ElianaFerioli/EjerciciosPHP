<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../View/css/estiloPrincipal.css"/>
        <title></title>
    </head>
    <body>
        <header class="container">
            <h1>Intersubjetividad digital</h1>
            <h2>
                En este blog, el poder objetivista de la mirada sartreriana no duele.
            </h2>
        </header>
        <?php
            if(!isset($modificar)){
        ?>
        <form method="get" action="../Controller/administracionBlog.php" class="thumbnail container">
            <h3>Crear nuevo artículo</h3>
            <input type="text" placeholder="Titulo del nuevo artículo" maxlength="50" size="45" autofocus name="titulo">
            <textarea rows="5" cols="100" placeholder="Escribe tu artículo" name="contenido">
                
            </textarea>
            <br>
            <input type="submit" value="Insertar Artículo" class="btn btn-primary">
        </form>
        <?php
            } else {
        ?>
        <form method="get" action="../Controller/administracionBlog.php" class="thumbnail container">
            <h3>Modificar artículo</h3>
            <input type="hidden" name="codArt" value="<?=$modificar->getCodArt()?>">
            <input type="text" placeholder="Titulo del nuevo artículo" maxlength="50" size="45" autofocus name="tituloModificado" value="<?=$modificar->getTitArt()?>">
            <textarea rows="5" cols="100" placeholder="Escribe tu artículo" name="contenidoModificado">
                <?=$modificar->getContArt()?>
            </textarea>
            <input type="submit" value="Modificar Artículo" class="btn btn-primary">
        </form>
        <?php
            }
        ?>
        <section class="container">
            <?php
                foreach($data['articulos'] as $art){
                    echo "<article class=\"thumbnail\">";
                        echo "<h4>";
                            echo $art->getTitArt();
                        echo "</h4>";
                        echo "<h5>";
                            echo "Fecha de publicación:".$art->getFechArt()."<br>Número del artículo: ".$art->getCodArt();
                        echo "</h5>";
                        echo "<div>";
                            echo $art->getContArt();
                        echo "</div>";
                        echo "<div id=\"contenedorBotones\">";
                            echo "<a class=\"modificacion\" href=\"administracionBlog.php?modificar=".$art->getCodArt()."\"></a>";
                            echo "<a class=\"borrado\" href=\"administracionBlog.php?borrar=".$art->getCodArt()."\"></a>";
                        echo "</div>";
                    echo "</article>";
                }
            ?>
        </section>
    </body>
</html>
