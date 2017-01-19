<?php
  require_once './twig/lib/Twig/Autoloader.php';
  Twig_Autoloader::register();
  $loader = new Twig_Loader_Filesystem(__DIR__.'/../View/templates');
  $twig = new Twig_Environment($loader);
  require_once '../Model/Articulo.php';    
  if(isset($_GET['titulo'])){
      $titulo = $_GET['titulo'];
      $contenido = $_GET['contenido'];
      $nuevoArticulo = new Articulo($titulo, $contenido);
      $nuevoArticulo->insert();
      unset($titulo);
      //header("Location: administracionBlog.php");
  } else if(isset($_GET['borrar'])){
      $codArt = $_GET['borrar'];
      $articulo = Articulo::getArticulo("CodArt", $codArt);
      $articulo->delete();
      //header("Location: administracionBlog.php");
  } else if(isset($_GET['modificar'])){
      $codArt = $_GET['modificar'];
      $modificar = Articulo::getArticulo("CodArt", $codArt);
  } else if(isset($_GET['tituloModificado'])){
      $tituloNuevo = $_GET['tituloModificado'];
      $contenidoNuevo = $_GET['contenidoModificado'];
      $articuloModificado = new Articulo($tituloNuevo, $contenidoNuevo);
      $articuloModificado->update($_GET['codArt']);
      //header("Location: administracionBlog.php");
  }
  $data['articulos'] = Articulo::getArticulos();
  foreach ($data['articulos'] as $art){
         $articulos[] = array(
                'titulo' => $art->getTitArt(),
                'fecha' => $art->getFechArt(),
                'codigo' => $art->getCodArt(),
                'contenido' => $art->getContArt()
            );
  }
  if(isset($modificar)){
    $artMod = array('titulo' => $modificar->getTitArt(), 'fecha' => $modificar->getFechArt(), 'codigo' => $modificar->getCodArt(), 'contenido' => $modificar->getContArt());
    $datos['artMod'] = $artMod;    
    unset($modificar);
  }
  $datos['art'] = $articulos;
  echo $twig->render('principal.html.twig', $datos);