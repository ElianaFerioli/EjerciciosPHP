<?php
session_start();
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//Recupera las clases que va a necesitar para recuperar la información
require_once '../Model/Usuario.php';
//Recibe el nombre y la contraseña del usuario que quiere ingresar
$usuario = $_GET['nomUsuario'];
$password = $_GET['passUsuario'];
$failUser = false;
$failPass = false;
//Se fija si el usuario existe
if(Usuario::verificaUsuario($usuario)){
    //Si existe verifica la contraseña
    if($password==Usuario::verificaPassword($usuario)){
        //Crea una sesión con el usuario
        $_SESSION['nomUsuario'] = $usuario;
        //Verifica si es administrador
        if(Usuario::verificaAdmin($usuario)){
            //Si es administrador lo manda a la vista de administrado
            include '../View/indexAdmin.php';
        } else {
            //Si es usuario normal lo manda a su perfil
            include '../View/indexUsuario.php';
        }
    } else { //Si no coincide la contraseña vuelve al login con un mensaje de fallo en la autenticacion
        $failPass = true;
        include '../View/login.php';
    }
} else {
    //Si no existe el nombre de usuario vuelve al login con un mensaje de fallo en la autenticacion
    $failUser = true;
    include '../View/login.php';
}
