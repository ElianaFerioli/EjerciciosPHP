 <?php
            if(isset($_GET['valorInicial'])){
                
                $cadenaNumero = $_GET['cadenaNumero'];
                $cadenaNumero = substr($cadenaNumero, 1);
                $cadenaNumero = explode(" ", $cadenaNumero);
                $valorInicial = $_GET['valorInicial'];
                $valorFinal = $_GET['valorFinal'];
                //comprueba que se cumplan las condiciones
                if(($valorFinal>=0)&&($valorFinal<=9)&&($valorInicial>=0)&&($valorInicial<=9)&&($valorInicial<$valorFinal)){
                    //muestra el original
                    echo "El valor de la posicion $valorInicial tiene que pasar al $valorFinal <br>";
                    //Lo muestra
                    echo "<br>Este es el array original:<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";                
                    }
                    echo "<br>------------------------------<br>";
                    foreach($cadenaNumero as $num){
                        echo "$num"." ";
                    }
                    //rota el array
                    $i = 10;
                    $j = 0;
                    for($x = 0; $x < 10; $x++){
                        if($valorInicial>=0){
                            $nuevo[$x] = $cadenaNumero[$i-$valorInicial];
                            $valorInicial--;
                        } else {                           
                            $nuevo[$x] = $cadenaNumero[$j];
                            $j++;
                        }                       
                    }                    
                    //Muestra el array ordenado
                    echo "<br><br><br>Este es el array rotado:<br>";
                    for($x = 0; $x < 10; $x++){
                        echo "$x"." ";                
                    }
                    echo "<br>------------------------------<br>";
                    foreach($nuevo as $num){
                        echo "$num"." ";
                    }       
                    
                } else {
                    echo "Los valores introducidos no son correctos";
                }
            }
        ?>

