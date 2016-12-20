<?php
session_start();
//Recupera las clases que va a necesitar para recuperar la información
require_once '../Model/Usuario.php';
require_once '../Model/Evento.php';
require_once '../Model/Deporte.php';
require_once '../Model/Instalacion.php';
require_once '../Model/Pista.php';

//Caso de que se llame desde el la página principal de administracion
if(isset($_GET['tabla'])){
    //Recibe una variable que indica el nombre de la tabla a la que quiere acceder
    $tabla = "\'".$_GET['tabla']."\'";
    //Recupera los datos de dicha tabla llamando al modelo correspondiente
    //Luego de recuperar los datos, carga la vista correspondiente
    switch($_GET['tabla']){
        case "USUARIO":
            $data[$tabla] = Usuario::getUsuarios();
            // Carga la vista
            include '../View/listadoAdministradorUsuario.php';
            break;
        case "EVENTO":
            $data[$tabla] = Evento::getEventos();
            // Carga la vista
            include '../View/listadoAdministradorEvento.php';
            break;
        case "DEPORTE":
            $data[$tabla] = Deporte::getDeportes();
            // Carga la vista
            include '../View/listadoAdministradorDeporte.php';
            break;
        case "INSTALACION":
            $data[$tabla] = Instalacion::getInstalaciones();
            // Carga la vista
            include '../View/listadoAdministradorInstalacion.php';
            break;
        default:
            break;    
    }
} else if(isset($_GET['borradoUsuario'])){ //Caso que se solicite un borrado
    Usuario::delete("CodUs", $_GET['borradoUsuario']);
    header("Location: administracion.php?tabla=USUARIO");
} else if(isset($_GET['borradoEvento'])){ //Caso que se solicite un borrado
    Evento::delete("CodEven", $_GET['borradoEvento']);
    header("Location: administracion.php?tabla=EVENTO");
} else if(isset($_GET['modificar'])){ //caso que se solicite una modificacion
    if($_GET['modificar']=="modificarUsuario"){
        $cod = $_GET['codUs'];
        $nom = $_GET['nomUs'];
        $pas = $_GET['passUs'];
        $ema = $_GET['emailUs'];
        $fech = $_GET['fechNac'];
        $prov = $_GET['provUs'];
        $loc = $_GET['localUs'];
        Usuario::update($cod, $nom, $pas, $ema, $fech, $prov, $loc);
        header("Location: administracion.php?tabla=USUARIO");
    }
    if($_GET['modificar']=="modificarEvento"){
        $codEv = $_GET['codEven'];
        $codPis = $_GET['pistaEvento'];
        $fech = $_GET['fechEven'];
        $hor = $_GET['horaEven'];
        $ni = $_GET['nivel'];
        $us = $_GET['usuariosFaltantes'];
        Evento::update($codPis, $fech, $hor, $ni, $us, $codEv);
        header("Location: administracion.php?tabla=EVENTO");
    }
    
} else if(isset($_GET['insertar'])){ //caso que se solicite un insert
    if($_GET['insertar']=="insertarUsuario"){
        $nom = $_GET['nomUs'];
        $pas = $_GET['passUs'];
        $em = $_GET['emailUs'];
        $fe = $_GET['fechNac'];
        $prov = $_GET['provUs'];
        $local = $_GET['localUs'];
        Usuario::insertNuevoUsuario($nom, $pas, $em, $fe, $prov, $local);
        header("Location: administracion.php?tabla=USUARIO");
    }
    if($_GET['insertar']=="insertarEvento"){
        $pis = $_GET['pistaEvento'];
        $fech = $_GET['fechEven'];
        $ho = $_GET['horaEven'];
        $ni = $_GET['nivel'];
        $falt = $_GET['usuariosFaltantes'];
        Evento::insertaEvento($pis, $fech, $ho, $ni, $falt);
        header("Location: administracion.php?tabla=EVENTO");
    }
} else if(isset($_GET['consultaPistaInstalcion'])){
    Pista::getPistas($_GET['deporte'], $_GET['consultaPistaInstalcion']);
} else if(isset($_GET['consultaInstalacion'])){
    Pista::getNomInstPorDeporte($_GET['consultaInstalacion']);
} else if(isset($_GET['consultaEvento'])){
    Evento::getCodigoPistaEvento("CodEven", $_GET['consultaEvento']);
} else if(isset($_GET['consultaIntalacionEventoAjax'])){
    $evento = Evento::getEvento("CodEven", $_GET['consultaIntalacionEventoAjax']);
    $pista = Pista::getPista("CodPista", $evento->getCodPista());
    $instalacion = Instalacion::getInstalacion("CodInst", $pista->getCodInst());
    echo \json_encode($instalacion->getNomInst());
} else if(isset($_GET['consultaPistaEventoAjax'])){
    $evento = Evento::getEvento("CodEven", $_GET['consultaPistaEventoAjax']);
    $pista = Pista::getPista("CodPista", $evento->getCodPista());
    $arrayDatos[] = $pista->getNomPista();
    $arrayDatos[] = $pista->getCodInst();
    echo \json_encode($arrayDatos);
}
