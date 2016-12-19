<?php
    include_once './clasesEjercicio01/Animal.php';
    include_once './clasesEjercicio01/Mamifero.php';
    include_once './clasesEjercicio01/Ave.php';
    include_once './clasesEjercicio01/Gato.php';
    include_once './clasesEjercicio01/Perro.php';
    include_once './clasesEjercicio01/Canario.php';
    include_once './clasesEjercicio01/Pinguino.php';
    include_once './clasesEjercicio01/Lagarto.php';
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
        <?php
            echo "<h1>Mamifero</h1>";
            $mam = new Mamifero("Ballena", "35", "Macho", "Jorobada");
            echo $mam;
            echo "<br>";
            $mam->comer();
            echo "<br>";
            $mam->dormir();
            echo "<br>";
            $mam->hablar();
            echo "<br>";
            $mam->amamantar();
            echo "<br>";
            $mam->beber();
            echo "<br>";
            $mam->cazar();
            echo "<br>";
            echo "<h1>Ave</h1>";
            $av = new Ave("Loro", "7", "Macho", "del Amazonas");            
            echo "<br>";
            echo $av;
            echo "<br>";
            $av->comer();
            echo "<br>";
            $av->dormir();
            echo "<br>";
            $av->hablar();
            echo "<br>";
            $av->cantar();
            echo "<br>";
            $av->empollar();
            echo "<br>";
            $av->volar();
            echo "<br>";
            echo "<h1>Gato</h1>";
            $gat = new Gato("Gato", "5", "Hembra", "Exótico", "Garfield");
            echo $gat;
            echo "<br>";
            $gat->comer();
            echo "<br>";
            $gat->dormir();
            echo "<br>";
            $gat->hablar();
            echo "<br>";
            $gat->amamantar();
            echo "<br>";
            $gat->beber();
            echo "<br>";
            $gat->cazar();
            echo "<br>";
            $gat->ronronear();
            echo "<br>";
            $gat->meterseEnCajas();
            echo "<br>";
            $gat->arañar();
            echo "<h1>Perro</h1>";
            $per = new Perro("Perro", "7", "Hembra", "Labrador", "Dana");
            echo $per;
            echo "<br>";
            $per->comer();
            echo "<br>";
            $per->dormir();
            echo "<br>";
            $per->hablar();
            echo "<br>";
            $per->amamantar();
            echo "<br>";
            $per->beber();
            echo "<br>";
            $per->cazar();
            echo "<br>";
            $per->ardilla();
            echo "<br>";
            $per->jugarConLaPelota();
            echo "<br>";
            $per->rebuscarEnLaBasura();
            echo "<h1>Canario</h1>";
            $cana = new Canario("Canario", "1", "Macho", "Amarillo", "Twity");
            echo  $cana;
            echo "<br>";
            $cana->comer();
            echo "<br>";
            $cana->dormir();
            echo "<br>";
            $cana->hablar();
            echo "<br>";
            $cana->cantar();
            echo "<br>";
            $cana->empollar();
            echo "<br>";
            $cana->volar();
            echo "<br>";
            $cana->dormirAcostado();
            echo "<br>";
            $cana->irAlaFuete();
            echo "<br>";
            $cana->pararseEnCables();
            echo "<h1>Pinguino</h1>";
            $pingu = new Pinguino("Pinguino", "3", "Macho", "Emperador", "Mayordomi");
            echo  $pingu;
            echo "<br>";
            $pingu->comer();
            echo "<br>";
            $pingu->dormir();
            echo "<br>";
            $pingu->hablar();
            echo "<br>";
            $pingu->cantar();
            echo "<br>";
            $pingu->empollar();
            echo "<br>";
            $pingu->volar();
            echo "<br>";
            $pingu->nadar();
            echo "<br>";
            $pingu->deslizasePorElHielo();
            echo "<br>";
            $pingu->protegerHembra();
            echo "<h1>Lagarto</h1>";
            $lag= new Lagarto("Lagartija", "2", "Macho", "Azul", "Juancho");
            echo $lag;
            echo "<br>";
            $lag->comer();
            echo "<br>";
            $lag->dormir();
            echo "<br>";
            $lag->hablar();
            echo "<br>";
            $lag->noHacerNada();
            echo "<br>";
            $lag->subirArama();
            echo "<br>";
            $lag->tomarSol();
            echo "<br>";
        ?>
    </body>
</html>
