<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
    //Recoge los datos de las instalaciones y las pistas
    require_once '../Model/Instalacion.php';
    require_once '../Model/Deporte.php';
    require_once '../Model/Pista.php';
    $instalaciones = Instalacion::getInstalaciones();
    $deporte = Deporte::getDeportes();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../View/css/estiloListadoAdministradorEvento.css">
        <script src="../View/js/jquery-2.1.4.min.js"></script>
        <script src="../View/js/funciones.js"></script>
        <title></title>
    </head>
    <body>
         <div class="page-header">
            <h1>Administración de Evento</h1>      
        </div>
        <div class="table-responsive contenedor">
            <?php
                if(isset($_GET['modificacionEvento'])){
                require_once '../Model/Evento.php';                
                $evmod = Evento::getEvento("CodEven", $_GET['modificacionEvento']);     
                $tabla = Evento::getEventos();
             ?>
            <form action="../Controller/administracion.php" method="get" name="modificar"  class="form-inline">
                <input type="hidden" name="modificar" value="modificarEvento">
                <input type="hidden" name="codEven" value="<?=$evmod->getCodEven()?>">
                <h3>Modificar Evento</h3>
                <br>
                <select name="deporteEvento" id="deporte">
                    <?php
                       foreach($deporte as $de)  {
                           if($de->getCodDep()==$_GET['codDep']){
                              echo '<option  selected id=\''.$de->getCodDep().'\' value=\''.strtolower($de->getNomDep()).'\'>'.$de->getNomDep(),'</option>'; 
                           } else {
                    ?>
                    <option  id="<?=$de->getCodDep()?>" value="<?= strtolower($de->getNomDep())?>"><?=$de->getNomDep()?></option>
                    <?php
                           }
                       }
                    ?>
                </select>
                <select name="instalacionEvento" id="instalacion">
                    <option selected disabled class="defecto">--Instalación--</option>
                    <!-- Se rellana con ajax-->
                </select>
                <select name="pistaEvento" id="pista">
                    <option selected disabled class="defecto">--Pista--</option>
                    <!--Se rellena con ajax-->
                </select>
                 <select name="nivel">
                    <?php
                        if($evmod->getNivelEven()=="Principiante"){
                            echo "<option selected value=\"Principiante\">Principiante</option>";
                        } else {
                           echo "<option value=\"Principiante\">Principiante</option>"; 
                        }
                        if($evmod->getNivelEven()=="Medio"){
                            echo "<option selected value=\"Medio\">Medio</option>";
                        } else {
                           echo "<option value=\"medio\">Medio</option>"; 
                        }
                        if($evmod->getNivelEven()=="Alto"){
                            echo "<option selected value=\"Alto\">Alto</option>";
                        } else {
                           echo "<option value=\"alto\">Alto</option>"; 
                        }
                        if($evmod->getNivelEven()=="Profesional"){
                            echo "<option selected value=\"Profesional\">Profesional</option>";
                        } else {
                           echo "<option value=\"Profesional\">Profesional</option>"; 
                        }
                    ?>
                </select>
                <br>
                <input type="text" placeholder="Fecha aaaa-mm-dd" name="fechEven" value="<?=$evmod->getFechEven()?>" class="form-control customInput"> 
                <input type="text" placeholder="Hora del evento 00:00:00" name="horaEven" value="<?=$evmod->getHoraEven()?>" class="form-control customInput">
                <input type="number" placeholder="Usuarios faltantes" name="usuariosFaltantes" value="<?=$evmod->getUsuariosFaltantes()?>" class="form-control customInput">
                <button type="submit" class="btn btn-info" id="modificarEvento">Modificar Evento</button>
            </form> 
            <table  class="table .table-hover">
                <tr>
                    <th></th>
                    <th>Codigo del evento</th>
                    <th>Codigo de la Pista</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nivel</th>
                    <th>Usuarios faltantes</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            <?php
                foreach($tabla as $ev)  {                
            ?>
               <tr>
                    <td class="sprite" id="deporte<?=Pista::getDeportePorPista($ev->getCodPista())?>"></td>
                    <td><?=$ev->getCodEven()?></td>
                    <td><?=$ev->getCodPista()?></td>
                    <td><?=$ev->getFechEven()?></td>
                    <td><?=$ev->getHoraEven()?></td>
                    <td><?=$ev->getNivelEven()?></td>
                    <td><?=$ev->getUsuariosFaltantes()?></td>
                    <td><?php
                            if(($ev->getCerrado()==0)&&($ev->getUsuariosFaltantes()!=0)){
                                echo "Abierto";
                            } else if(($ev->getCerrado()==1)||($ev->getUsuariosFaltantes()==0)) {
                                echo "Cerrado";
                            }
                        ?>
                    </td>
                    <td><a href="../View/listadoAdministradorEvento.php?modificacionEvento=<?=$ev->getCodEven()?>&codDep=<?= Pista::getDeportePorPista($ev->getCodPista())?>" class="btn btn-warning">Modificar</a>
                        <a href="../Controller/administracion.php?borradoEvento=<?=$ev->getCodEven()?>" class="btn btn-danger">Borrar</a>
                    </td>
                </tr> 
            <?php
              }
            ?>
            </table>
            <?php            
              } else {                  
            ?>
            <form action="../Controller/administracion.php" method="get" name="insertar" class="form-inline">
                 <input type="hidden" name="insertar" value="insertarEvento">
                 <h3>Insertar nuevo Evento</h3>
                 <br>
                 <select name="deporteEvento" id="deporte">
                     <option selected disabled>--Deporte--</option>
                     <?php
                        foreach($deporte as $de)  {  
                     ?>
                     <option  id="<?=$de->getCodDep()?>" value="<?= strtolower($de->getNomDep())?>"><?=$de->getNomDep()?></option>
                     <?php
                        }
                     ?>
                 </select>
                 <select name="instalacionEvento" id="instalacion">
                     <option selected disabled>--Instalación--</option>
                     <!-- Se rellana con ajax-->
                 </select>
                 <select name="pistaEvento" id="pista">
                     <option selected disabled>--Pista--</option>
                     <!--Se rellena con ajax-->
                 </select>
                 <select name="nivel">
                     <option selected disabled>--Nivel--</option>
                     <option value="Principiante">Principiante</option>
                     <option value="Bajo">Bajo</option>
                     <option value="Medio">Medio</option>
                     <option value="Alto">Alto</option>
                     <option value="Profesional">Profesional</option>
                 </select>
                 <br>
                 <input type="text" placeholder="Fecha aaaa-mm-dd" name="fechEven" class="form-control customInput">
                 <input type="text" placeholder="Hora del evento 00:00:00" name="horaEven" class="form-control customInput">
                 <input type="number" placeholder="Usuarios faltantes" name="usuariosFaltantes" class="form-control customInput">
                 <input type="submit" value="insertar" class="btn btn-success" id="insertarEvento">
             </form>
            <table class="table .table-hover">
                <tr>
                    <th></th>
                    <th>Codigo del evento</th>
                    <th>Codigo de la Pista</th>
                    <th>Fecha</th>
                    <th>Hora</th>
                    <th>Nivel</th>
                    <th>Usuarios faltantes</th>
                    <th>Estado</th>
                    <th></th>
                </tr>
            <?php
                foreach($data[$tabla] as $ev)  {                
            ?>
               <tr>
                   <td class="sprite" id="deporte<?=Pista::getDeportePorPista($ev->getCodPista())?>"></td>
                    <td><?=$ev->getCodEven()?></td>
                    <td><?=$ev->getCodPista()?></td>
                    <td><?=$ev->getFechEven()?></td>
                    <td><?=$ev->getHoraEven()?></td>
                    <td><?=$ev->getNivelEven()?></td>
                    <td><?=$ev->getUsuariosFaltantes()?></td>
                    <td><?php
                            if(($ev->getCerrado()==0)&&($ev->getUsuariosFaltantes()!=0)){
                                echo "Abierto";
                            } else if(($ev->getCerrado()==1)||($ev->getUsuariosFaltantes()==0)) {
                                echo "Cerrado";
                            }
                        ?>
                    </td>
                    <td><a href="../View/listadoAdministradorEvento.php?modificacionEvento=<?=$ev->getCodEven()?>&codDep=<?= Pista::getDeportePorPista($ev->getCodPista())?>" class="btn btn-warning">Modificar</a>
                        <a href="../Controller/administracion.php?borradoEvento=<?=$ev->getCodEven()?>" class="btn btn-danger">Borrar</a>
                    </td>
                </tr> 
            <?php
                }
              }
            ?>
            </table>
        </div>
    </body>
</html>
