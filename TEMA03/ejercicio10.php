<!--
Escribe un programa que nos diga el horóscopo a partir del día y el mes de nacimiento.
-->

<?php 
    
    $dia = $_GET['dia'];
    $mes = $_GET['mes'];
    $horoscopo = "";
    
    if(($mes=="enero")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "Capricornio";
    } else if (($mes=="enero")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "acuario";
    } else if (($mes=="febrero")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "acuario";
    }else if (($mes=="febrero")&&($dia >= 22)&&($dia <= 29)){
        $horoscopo = "piscis";
    } else if (($mes=="marzo")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "piscis";
    }else if (($mes=="marzo")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "aries";
    } else if (($mes=="abril")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "aries";
    }else if (($mes=="abril")&&($dia >= 22)&&($dia <= 30)){
        $horoscopo = "tauro";
    } else if (($mes=="mayo")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "tauro";
    }else if (($mes=="mayo")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "géminis";
    } else if (($mes=="junio")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "géminis";
    } else if (($mes=="junio")&&($dia >= 22)&&($dia <= 30)){
        $horoscopo = "cancer";
    } else if (($mes=="julio")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "cancer";
    } else if (($mes=="julio")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "leo";
    } else if (($mes=="agosto")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "leo";
    } else if (($mes=="agosto")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "virgo";
    } else if (($mes=="septiembre")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "virgo";
    }else if (($mes=="septiembre")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "libra";
    } else if (($mes=="octubre")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "libra";
    }else if (($mes=="octubre")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "escorpio";
    } else if (($mes=="noviembre")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "escorpio";
    }else if (($mes=="noviembre")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "sagitario";
    } else if (($mes=="diciembre")&&($dia >= 1)&&($dia <= 21)){
        $horoscopo = "sagitario";
    }else if (($mes=="diciembre")&&($dia >= 22)&&($dia <= 31)){
        $horoscopo = "capricornio";
    } 
    
    echo "Tu horóscopo es $horoscopo";
    
    ?>

