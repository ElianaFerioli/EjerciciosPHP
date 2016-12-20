<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoVisitanteInstalacion.css">
        <title></title>
    </head>
    <body>
        <div id="contenedorTabla">
            <table>
                <tr>
                    <th>Nombre</th>
                    <th>Provincia</th>
                    <th>Localidad</th>
                    <th>Direccion</th>
                </tr>
            <?php
                foreach($data[$tabla] as $ins)  {                
            ?>
               <tr>
                    <td><?=$ins->getNomInst()?></td>
                    <td><?=$ins->getProvInst()?></td>
                    <td><?=$ins->getLocalInst()?></td>
                    <td><?=$ins->getDirecInst()?></td>
                </tr> 
            <?php
              }
            ?>
            </table>
        </div>
    </body>
</html>
