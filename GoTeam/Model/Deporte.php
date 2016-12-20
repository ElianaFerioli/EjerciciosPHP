<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once 'GoTeamDB.php';

class Deporte {
  //Atributos de instancia
  private $codDep;
  private $nomDep;
  //Constructor
  function __construct($cod, $nom) {
    $this->codDep = $cod;
    $this->nomDep = $nom;
  }
  //Getters
  function getCodDep() {
      return $this->codDep;
  }
  function getNomDep() {
      return $this->nomDep;
  }
  //Setters
  function setCodDep($codDep) {
      $this->codDep = $codDep;
  }
  function setNomDep($nomDep) {
      $this->nomDep = $nomDep;
  }
  //Métodos de instancia
  public function insert() {
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO DEPORTE (NomDep)"
            . " VALUES (\"".$this->nomDep."\")";
    $conexion->exec($insercion);
  }
  public function delete($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $borrado = "DELETE FROM DEPORTE WHERE ".$atributo. "=\"".$valor."\"";
    $conexion->exec($borrado);
  }  
  public static function getDeportes() {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT *"
            . " FROM DEPORTE";
    $consulta = $conexion->query($seleccion);    
    $deportes= [];    
    while ($registro = $consulta->fetchObject()) {
      $deportes[] = new Deporte($registro->CodDep, $registro->NomDep);
    }   
    return $deportes;    
  }  
  public static function getDeporte($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodDep, NomDep"
            . " FROM DEPORTE WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $deporte = new Deporte($registro->CodDep, $registro->NomDep);
    return $deporte;    
  }
}