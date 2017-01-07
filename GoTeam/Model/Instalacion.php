<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'GoTeamDB.php';

class Instalacion {
  //Atributos de instancia
  private $codInst;
  private $nomInst;
  private $provInst;
  private $localInst;
  private $direcInst;
  //Constructor
  function __construct($cod, $nom, $prov, $local, $direc) {
    $this->codInst = $cod;
    $this->nomInst = $nom;
    $this->provInst = $prov;
    $this->localInst = $local;
    $this->codInst = $cod;
    $this->direcInst = $direc;    
  }
  //Getters
  function getCodInst() {
      return $this->codInst;
  }
  function getNomInst() {
      return $this->nomInst;
  }
  function getProvInst() {
      return $this->provInst;
  }
  function getLocalInst() {
      return $this->localInst;
  }
  function getDirecInst() {
      return $this->direcInst;
  }
  //Setters
  function setCodInst($codInst) {
      $this->codInst = $codInst;
  }
  function setNomInst($nomInst) {
      $this->nomInst = $nomInst;
  }
  function setProvInst($provInst) {
      $this->provInst = $provInst;
  }
  function setLocalInst($localInst) {
      $this->localInst = $localInst;
  }
  function setDirecInst($direcInst) {
      $this->direcInst = $direcInst;
  }
  //Métodos de instancia
  public function insert() {
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO INSTALACION (NomInst, ProvInst, LocalidadInst, DirecInst)"
            . " VALUES (\"".$this->nomInst."\", \"".$this->provInst."\", \"".$this->localInst."\", \"".$this->direcInst."\")";
    $conexion->exec($insercion);
  }
  public function delete($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $borrado = "DELETE FROM INSTALACION WHERE ".$atributo. "=\"".$valor."\"";
    $conexion->exec($borrado);
  }  
  public static function getInstalaciones() {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT *"
            . " FROM INSTALACION";
    $consulta = $conexion->query($seleccion);    
    $instalaciones= [];    
    while ($registro = $consulta->fetchObject()) {
      $instalaciones[] = new Instalacion($registro->CodInst, $registro->NomInst, $registro->ProvInst,
              $registro->LocalidadInst, $registro->DirecInst);
    }   
    return $instalaciones;    
  }    
  public static function getInstalacion($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT *"
            . " FROM INSTALACION WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $instalacion = new Instalacion($registro->CodInst, $registro->NomInst, $registro->ProvInst,
              $registro->LocalidadInst, $registro->DirecInst);
    return $instalacion;    
  }

}

