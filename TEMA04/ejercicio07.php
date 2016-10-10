<!DOCTYPE html>
<!--
Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
“Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.
-->
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <p>Realiza el control de acceso a una caja fuerte. La combinación será un número de 4 cifras. El
            programa nos pedirá la combinación para abrirla. Si no acertamos, se nos mostrará el mensaje
            “Lo siento, esa no es la combinación” y si acertamos se nos dirá “La caja fuerte se ha abierto
            satisfactoriamente”. Tendremos cuatro oportunidades para abrir la caja fuerte.</p>
        <?php
            if(!isset($_GET['intentos'])){
                $intentos = 4;                
            } else {
                $combinacionCorrecta = 1234;
                $esCorrecto = false;
                $intentos = $_GET['intentos'];
                $intentos--;
                $combinacionUsuario = $_GET['combinacionUsuario'];
                
                if($intentos!=0) {
                    if($combinacionUsuario==$combinacionCorrecta){
                        echo "Usted ha acertado";
                        $esCorrecto = true;
                    } else {
                        echo "Combinación incorrecta, le quedan $intentos intentos.";
                    }
                } else {
                    echo "Lo sentimos ya no tiene más oportunidades.";
                }
            }
        ?>
        <form action="ejercicio07.php" method="get">
            <input type="number" max="9999" name="combinacionUsuario" min="1000">
            <input type="hidden" name="intentos" value= <?php echo "\"" + $intentos + "\"" ?>>
            <?php 
                if(($intentos > 0)&&(!$esCorrecto)) {
                    echo "<input type=\"submit\" value=\"comprobar número\">";
                } else {
                    echo "<input type=\"submit\" value=\"comprobar número\" disabled>";
                }
                ?>
        </form>      
    </body>
</html>

