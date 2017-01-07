<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoAdministradorUsuario.css">
        <title></title>
    </head>
    <body>
        <div class="page-header">
            <h1>Administración de Usuarios</h1>      
        </div>
         <div class="table-responsive contenedor">
             <?php
                if(isset($_GET['modificacionUsuario'])){
                require_once '../Model/Usuario.php';
                $usmod = Usuario::getUsuario("CodUs", $_GET['modificacionUsuario']);     
                $tabla = Usuario::getUsuarios();
             ?>
             <form action="../Controller/administracion.php" method="get" name="modificar" class="form-inline">
                 <input type="hidden" name="modificar" value="modificarUsuario">
                 <input type="hidden" name="codUs" value="<?= $usmod->getCodUs() ?>">
                 <h3>Modificar usuario <?= $usmod->getNomUs() ?></h3>
                 <input type="text" value="<?= $usmod->getNomUs() ?>" name="nomUs" class="form-control customInput">
                 <input type="text" value="<?= $usmod->getPassUs() ?>" name="passUs" class="form-control customInput">
                 <input type="text" value="<?= $usmod->getEmailUs() ?>" name="emailUs" class="form-control customInput">
                 <br>
                 <input type="text" value="<?= $usmod->getFechNac() ?>" name="fechNac" class="form-control customInput">
                 <input type="text" value="<?= $usmod->getProvUs() ?>" name="provUs" class="form-control customInput"> 
                 <input type="text" value="<?= $usmod->getLocalUs() ?>" name="localUs" class="form-control customInput">
                 <button type="submit" class="btn btn-info" id="modificarUsuario">Modificar Usuario</button>
             </form>
             <table class="table .table-hover">
                <thead>
                    <tr id="cabecera">
                        <th>Codigo</th>
                        <th>Nombre de Usuario</th>
                        <th>Fecha de nacimiento</th>
                        <th>Email</th>
                        <th>Provincia</th>
                        <th>Localidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
                foreach($tabla as $us)  {             
            ?>
               <tr>
                   <td><?=$us->getCodUs()?></td>
                    <td><?=$us->getNomUs()?></td>
                    <td><?=$us->getFechNac()?></td>
                    <td><?=$us->getEmailUs()?></td>
                    <td><?=$us->getProvUs()?></td>
                    <td><?=$us->getLocalUs()?></td>
                    <td><a href="../View/listadoAdministradorUsuario.php?modificacionUsuario=<?=$us->getCodUs()?>" class="btn btn-warning">Modificar</a>                        </a>
                        <a href="../Controller/administracion.php?borradoUsuario=<?=$us->getCodUs()?>"  class="btn btn-danger">Borrar</a>                        </a>
                    </td>
                </tr>
            <?php
              }
            ?>
                </tbody>
            </table>
             <?php 
                } else {
             ?>             
             <form action="../Controller/administracion.php" method="get" name="insertar" class="form-inline">
                 <input type="hidden" name="insertar" value="insertarUsuario">
                 <h3>Insertar nuevo Usuario</h3>
                 <input type="text" placeholder="Nombre" name="nomUs" class="form-control customInput">
                 <input type="password" placeholder="Contraseña" name="passUs" class="form-control customInput">
                 <input type="text" placeholder="Email" name="emailUs" class="form-control customInput">
                 <br>
                 <input type="text" placeholder="Nacimiento aa-mm-dd" name="fechNac" class="form-control customInput">
                 <input type="text" placeholder="Provincia" name="provUs" class="form-control customInput">
                 <input type="text" placeholder="Localidad" name="localUs" class="form-control customInput">
                 <button type="submit" class="btn btn-success" id="insertarUsuario">Insertar Usuario</button>
             </form>
             <table class="table .table-hover">
                <thead>
                    <tr id="cabecera">
                        <th>Codigo</th>
                        <th>Nombre de Usuario</th>
                        <th>Fecha de nacimiento</th>
                        <th>Email</th>
                        <th>Provincia</th>
                        <th>Localidad</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
            <?php
                foreach($data[$tabla] as $us)  {             
            ?>                
                <tr>
                    <td><?=$us->getCodUs()?></td>
                     <td><?=$us->getNomUs()?></td>
                     <td><?=$us->getFechNac()?></td>
                     <td><?=$us->getEmailUs()?></td>
                     <td><?=$us->getProvUs()?></td>
                     <td><?=$us->getLocalUs()?></td>
                     <td><a href="../View/listadoAdministradorUsuario.php?modificacionUsuario=<?=$us->getCodUs()?>" class="btn btn-warning">Modificar</a>
                         <a href="../Controller/administracion.php?borradoUsuario=<?=$us->getCodUs()?>" class="btn btn-danger">Borrar</a>
                     </td>
                 </tr> 
            <?php
              }
            ?>
                </tbody>
            </table>
            <?php
                }
            ?>
        </div>
    </body>
</html>
