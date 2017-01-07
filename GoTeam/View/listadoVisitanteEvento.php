<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoVisitanteEvento.css">
        <title></title>
    </head>
    <body>
        <div id="contenedorTabla">
            <table>
                <tr>
                    <th>Codigo de la Pista</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nivel</th>
                    <th>Usuarios faltantes</th>
                    <th>Estado</th>
                </tr>
            <?php
                foreach($data[$tabla] as $ev)  {                
            ?>
               <tr>
                    <td><?=$ev->getCodPista()?></td>
                    <td><?=$ev->getFechEven()?></td>
                    <td><?=$ev->getHoraEven()?></td>
                    <td><?=$ev->getNivelEven()?></td>
                    <td><?=$ev->getUsuariosFaltantes()?></td>
                    <td><?php 
                        if($ev->getCerrado()==0){
                            echo "Abierto";
                        } else {
                            echo "Cerrado";
                        }
                        ?></td>
                </tr> 
            <?php
              }
            ?>
            </table>
        </div>
    </body>
</html>
