<?php
require_once 'BlogBD.php';
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Articulo
 *
 * @author eli
 */
class Articulo {
    //Atributos de instancia
    private $codArt;
    private $titArt;
    private $fechArt;
    private $contArt;
    //Constructor
    function __construct($cont, $tit, $fech, $cod) {
        $this->contArt = $cont;
        $this->titArt = $tit;
        if(isset($fech)){
            $this->fechArt = $fech;
            $this->codArt = $cod;
        }
    }
    //Getters y setters
    function getCodArt() {
        return $this->codArt;
    }
    function getTitArt() {
        return $this->titArt;
    }
    function getFechArt() {
        return $this->fechArt;
    }
    function getContArt() {
        return $this->contArt;
    }
    function setCodArt($codArt) {
        $this->codArt = $codArt;
    }
    function setTitArt($titArt) {
        $this->titArt = $titArt;
    }
    function setFechArt($fechArt) {
        $this->fechArt = $fechArt;
    }
    function setContArt($contArt) {
        $this->contArt = $contArt;
    }
    //Métodos de instancia
    public function insert() {
        $conexion = BlogBD::connectDB();
        $insercion = "INSERT INTO ARTICULO (TitArt, ContArt)"
                . " VALUES (\"".$this->titArt."\", \"".$this->contArt."\")";
        $conexion->exec($insercion);
    }
    public function delete() {
        $conexion = BlogBD::connectDB();
        $borrado = "DELETE FROM ARTICULO WHERE CodArt=\"".$this->codArt."\"";
        $conexion->exec($borrado);
    }
    public function update($codArt) {
    $conexion = BlogBD::connectDB();
    $update = "UPDATE ARTICULO SET TitArt=\"".$this->titArt."\", ContArt=\"".$this->contArt."\"".
            " WHERE CodArt=".$codArt;
    $conexion->exec($update);
  }
    //Métodos de clase
    public static function getArticulos() {
        $conexion = BlogBD::connectDB();
        $seleccion = "SELECT * FROM ARTICULO";
        $consulta = $conexion->query($seleccion);    
        $articulos= [];    
        while ($registro = $consulta->fetchObject()) {
          $articulos[] = new Articulo($registro->ContArt, $registro->TitArt, $registro->FechArt, $registro->CodArt);
        }   
        return $articulos;    
    }
    public static function getArticulo($atributo, $valor) {
        $conexion = BlogBD::connectDB();
        $seleccion = "SELECT * FROM ARTICULO WHERE ".$atributo. "=\"".$valor."\"";
        $consulta = $conexion->query($seleccion);  
        $registro = $consulta->fetchObject();
        $articulo = new Articulo($registro->ContArt, $registro->TitArt, $registro->FechArt, $registro->CodArt);
        return $articulo;
    }

}
