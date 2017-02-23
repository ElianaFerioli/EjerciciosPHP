<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="./css/estiloIndex.css">
        <title></title>
    </head>
    <body>
        <div class="container">
            <h1>Elige tu provincia</h1>
            <form action="./meteo.php" method="get">
                <select name="provincia" size="1">
                    <option selected disabled value="">Provincia</option>
                    <option value='A Coruña' >A Coruña</option>
                    <option value='álava'>álava</option>
                    <option value='Albacete' >Albacete</option>
                    <option value='Alicante'>Alicante</option>
                    <option value='Almería' >Almería</option>
                    <option value='Asturias' >Asturias</option>
                    <option value='ávila' >Ávila</option>
                    <option value='Badajoz' >Badajoz</option>
                    <option value='Barcelona'>Barcelona</option>
                    <option value='Burgos' >Burgos</option>
                    <option value='Cáceres' >Cáceres</option>
                    <option value='Cádiz' >Cádiz</option>
                    <option value='Cantabria' >Cantabria</option>
                    <option value='Castellón' >Castellón</option>
                    <option value='Ceuta' >Ceuta</option>
                    <option value='Ciudad Real' >Ciudad Real</option>
                    <option value='Córdoba' >Córdoba</option>
                    <option value='Cuenca' >Cuenca</option>
                    <option value='Gerona' >Gerona</option>
                    <option value='Girona' >Girona</option>
                    <option value='Las Palmas' >Las Palmas</option>
                    <option value='Granada' >Granada</option>
                    <option value='Guadalajara' >Guadalajara</option>
                    <option value='Guipúzcoa' >Guipúzcoa</option>
                    <option value='Huelva' >Huelva</option>
                    <option value='Huesca' >Huesca</option>
                    <option value='Jaén' >Jaén</option>
                    <option value='La Rioja' >La Rioja</option>
                    <option value='León' >León</option>
                    <option value='Lleida' >Lleida</option>
                    <option value='Lugo' >Lugo</option>
                    <option value='Madrid' >Madrid</option>
                    <option value='Malaga' >Málaga</option>
                    <option value='Mallorca' >Mallorca</option>
                    <option value='Melilla' >Melilla</option>
                    <option value='Murcia' >Murcia</option>
                    <option value='Navarra' >Navarra</option>
                    <option value='Orense' >Orense</option>
                    <option value='Palencia' >Palencia</option>
                    <option value='Pontevedra'>Pontevedra</option>
                    <option value='Salamanca'>Salamanca</option>
                    <option value='Segovia' >Segovia</option>
                    <option value='Sevilla' >Sevilla</option>
                    <option value='Soria' >Soria</option>
                    <option value='Tarragona' >Tarragona</option>
                    <option value='Tenerife' >Tenerife</option>
                    <option value='Teruel' >Teruel</option>
                    <option value='Toledo' >Toledo</option>
                    <option value='Valencia' >Valencia</option>
                    <option value='Valladolid' >Valladolid</option>
                    <option value='Vizcaya' >Vizcaya</option>
                    <option value='Zamora' >Zamora</option>
                    <option value='Zaragoza'>Zaragoza</option>
                </select>
                <input type="submit" value=">" id="enviar">
            </form>
        </div>
    </body>
</html>
