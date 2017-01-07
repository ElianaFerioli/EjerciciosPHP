<?php
  require_once '../Model/Articulo.php';
  $data['articulos'] = Articulo::getArticulos();  
  if(isset($_GET['titulo'])){
      $titulo = $_GET['titulo'];
      $contenido = $_GET['contenido'];
      $nuevoArticulo = new Articulo($titulo, $contenido);
      $nuevoArticulo->insert();
      header("Location: administracionBlog.php");
  } else if(isset($_GET['borrar'])){
      $codArt = $_GET['borrar'];
      $articulo = Articulo::getArticulo("CodArt", $codArt);
      $articulo->delete();
      header("Location: administracionBlog.php");
  } else if(isset($_GET['modificar'])){
      $codArt = $_GET['modificar'];
      $modificar = Articulo::getArticulo("CodArt", $codArt); 
      include '../View/principal.php';
  } else if(isset($_GET['tituloModificado'])){
      $tituloNuevo = $_GET['tituloModificado'];
      $contenidoNuevo = $_GET['contenidoModificado'];
      $articuloModificado = new Articulo($contenidoNuevo, $tituloNuevo);
      $articuloModificado->update($_GET['codArt']);
      header("Location: administracionBlog.php");
  } else {
      include '../View/principal.php';
  }

