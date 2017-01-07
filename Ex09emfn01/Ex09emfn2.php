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
            $brisca = array("as" => 11, "2" => 0, "3" => 10, "4" => 0, "5" => 0, "6" => 0, "7" => 0, "8" => 0, "9" => 0, "sota" => 2, "caballo" => 3, "rey" => 4);
            $palos = array(1=>"copa", 2=>"espada", 3=>"basto", 4=>"oro");
            $numeros = array(1=>"as", 2=>"2", 3=>"3", 4=>"4", 5=>"5", 6=>"6", 7=>"7", 8=>"8", 9=>"9", 10=>"sota", 11=>"caballo", 12=>"rey");
            $cartasEnMesa;
            $total = 0;
            $x = 0;
            $paloAnterior;
            $numeroAnterior;
            //crea una primera carta
            //elige el palo
            $randomPalo = rand(1, 4);                
            //elige la carta
            $randomNumero = rand(1, 12);
            $num = $numeros[$randomNumero];                
            //genera la carta
            $carta = $num." ".$palos[$randomPalo];
            $cartasEnMesa[$x] = $carta;
            $x++;
            $paloAnterior = $palos[$randomPalo];
            $numeroAnterior = $numeros[$randomNumero];
            //Genera el resto de las cartas
            //elije las cartas
            for($i = 0; $i < 5; $i++){
                $noSeRepite = false;
                while(!$noSeRepite) {
                   //elige si se repite el palo o el número
                    $queSeRepite;
                    $alea = rand(0,1);
                    if($alea == 0){
                        $queSeRepite = "numero";
                    } else {
                        $queSeRepite = "palo";
                    }
                   //elige el palo
                    if($queSeRepite=="palo"){
                        $mismoPalo = false;
                        while(!$mismoPalo){
                            $randomPalo = rand(1, 4); 
                            if($palos[$randomPalo]==$paloAnterior){
                                $mismoPalo = true;
                            }                        
                        }
                    } else {
                        $randomPalo = rand(1, 4); 
                    }                                   
                    //elige el número
                    if($queSeRepite=="numero"){
                        $mismoNumero = false;
                        while(!$mismoNumero){
                            $randomNumero = rand(1, 12); 
                            if($numeros[$randomNumero]==$numeroAnterior){
                                $mismoNumero = true;
                            }                        
                        }
                    } else {
                        $randomNumero = rand(1, 12);
                        $num = $numeros[$randomNumero];
                    }             
                    //genera la carta
                    $carta = $num." ".$palos[$randomPalo];
                    
                    if(!in_array($carta, $cartasEnMesa)){
                        $cartasEnMesa[$x] = $carta;
                        $x++;
                        $noSeRepite = true;
                        $paloAnterior = $palos[$randomPalo];
                        $numeroAnterior = $numeros[$randomNumero];
                    }
                }
                //Se fija cual es el total según la brisca
                $total = $total + $brisca[$num];
                echo "$carta<br>";
            }
            //Se fija cual es el total según la brisca
            echo"<br> El total según la brisca es: $total";
        ?>
    </body>
</html>
