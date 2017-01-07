<?php
require_once 'GoTeamDB.php';

class Pista {
  //Atributos de instancia
  private $codPista;
  private $codInst;
  private $codDep;
  private $nomPista;
  //Constructor
  function __construct($codp, $codi, $coddep, $nomp) {
    $this->codPista = $codp;
    $this->codInst = $codi;
    $this->codDep = $coddep;
    $this->nomPista = $nomp;
  }
  //Getters
  function getCodPista() {
      return $this->codPista;
  }
  function getCodInst() {
      return $this->codInst;
  }
  function getCodDep() {
      return $this->codDep;
  }
  function getNomPista() {
      return $this->nomPista;
  }
  //Setters
  function setCodPista($codPista) {
      $this->codPista = $codPista;
  }
  function setCodInst($codInst) {
      $this->codInst = $codInst;
  }
  function setCodDep($codDep) {
      $this->codDep = $codDep;
  }
  function setNomPista($nomPista) {
      $this->nomPista = $nomPista;
  }
  //Métodos
  public static function getPistas($valorDeporte,  $valorInstalacion) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT NomPist, CodPista"
            . " FROM PISTA WHERE CodDep=".$valorDeporte.""." AND CodInst=".$valorInstalacion;
    $consulta = $conexion->query($seleccion);
    $pistas= [];    
    while ($registro = $consulta->fetchObject()) {
        $pistas[] = $registro->NomPist;
        $pistas[] = $registro->CodPista;
    } 
    echo \json_encode($pistas);
  }
  public static function getNomInstPorDeporte($valorDeporte) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT DISTINCT(NomInst), A.CodInst FROM PISTA A, INSTALACION B WHERE A.CodInst=B.CodInst AND A.CodDep=".$valorDeporte;
    $consulta = $conexion->query($seleccion);
    $instalaciones= [];    
    while ($registro = $consulta->fetchObject()) {
        $instalaciones[] = $registro->NomInst;
        $instalaciones[] = $registro->CodInst;
    } 
    echo \json_encode($instalaciones);
  }
  public static function getDeportePorPista($codPista){
      $conexion = GoTeamDB::connectDB();
      $seleccion = "SELECT CodDep FROM PISTA WHERE CodPista=".$codPista;
      $consulta = $conexion->query($seleccion);
      $deporte;    
    while ($registro = $consulta->fetchObject()) {
        $deporte = $registro->CodDep;
    } 
    return $deporte;
  }
   public static function getPista($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodPista, CodInst, CodDep, NomPist"
            . " FROM PISTA WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $pista = new Pista($registro->CodPista, $registro->CodInst, $registro->CodDep, $registro->NomPist);    
    return $pista;    
  }
  
}
