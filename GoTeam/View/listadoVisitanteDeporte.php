<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoVisitanteDeporte.css">
        <title></title>
    </head>
    <body>
        <div id="contenedorTabla">
            <table>
                <tr>
                    <th>Codigo del Deporte</th>
                    <th>Nombre</th>
                </tr>
            <?php
                foreach($data[$tabla] as $de)  {                
            ?>
               <tr>
                    <td><?=$de->getCodDep()?></td>
                    <td><?=$de->getNomDep()?></td>
                </tr> 
            <?php
              }
            ?>
            </table>
        </div>
    </body>
</html>
