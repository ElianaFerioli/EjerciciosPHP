<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoVisitanteUsuario.css">
        <title></title>
    </head>
    <body>
        <div id="contenedorTabla">
            <table>
                <tr id="cabecera">
                    <th>Perfil</th>
                    <th>Nombre de Usuario</th>
                    <th>Fecha de nacimiento</th>
                    <th>Email</th>
                    <th>Provincia</th>
                    <th>Localidad</th>
                </tr>
            <?php
                foreach($data[$tabla] as $us)  {                
            ?>
               <tr>
                   <td><img src="../View/img/<?=$us->getFotoUs()?>" class="fotoUsuario"/><br><p class="descripcionUsuario"><?=$us->getDescUs()?></p></td>
                    <td><?=$us->getNomUs()?></td>
                    <td><?=$us->getFechNac()?></td>
                    <td><?=$us->getEmailUs()?></td>
                    <td><?=$us->getProvUs()?></td>
                    <td><?=$us->getLocalUs()?></td>
                </tr> 
            <?php
              }
            ?>
            </table>
        </div>
    </body>
</html>
