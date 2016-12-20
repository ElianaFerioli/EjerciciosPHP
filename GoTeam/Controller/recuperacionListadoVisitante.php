<?php
//Recupera las clases que va a necesitar para recuperar la información
require_once '../Model/Usuario.php';
require_once '../Model/Evento.php';
require_once '../Model/Deporte.php';
require_once '../Model/Instalacion.php';
//Recibe una variable que indica el nombre de la tabla a la que quiere acceder
$tabla = "\'".$_GET['tabla']."\'";
//Recupera los datos de dicha tabla llamando al modelo correspondiente
//Luego de recuperar los datos, carga la vista correspondiente
switch($_GET['tabla']){
    case "USUARIO":
        $data[$tabla] = Usuario::getUsuarios();
        // Carga la vista
        include '../View/listadoVisitanteUsuario.php';
        break;
    case "EVENTO":
        $data[$tabla] = Evento::getEventos();
        // Carga la vista
        include '../View/listadoVisitanteEvento.php';
        break;
    case "DEPORTE":
        $data[$tabla] = Deporte::getDeportes();
        // Carga la vista
        include '../View/listadoVisitanteDeporte.php';
        break;
    case "INSTALACION":
        $data[$tabla] = Instalacion::getInstalaciones();
        // Carga la vista
        include '../View/listadoVisitanteInstalacion.php';
        break;
    default:
        break;    
}


