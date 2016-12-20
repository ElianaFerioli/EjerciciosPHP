<?php
require_once 'GoTeamDB.php';
class Evento {
  //Atributos de instancia
  private $codEven;
  private $codPista;
  private $fechEven;
  private $horaEven;
  private $nivelEven;
  private $usuariosFaltantes;
  private $cerrado;
  //Constructor
  function __construct($codEv, $codPis, $fechEv, $horaEv, $nivelEv, $usFalt, $cerr) {
    $this->codEven = $codEv;
    $this->codPista = $codPis;
    $this->fechEven = $fechEv;
    $this->horaEven = $horaEv;
    $this->nivelEven = $nivelEv;
    $this->usuariosFaltantes = $usFalt;
    $this->cerrado = $cerr;
  }
  //Getters
  function getCodEven() {
      return $this->codEven;
  }
  function getCodPista() {
      return $this->codPista;
  }
  function getFechEven() {
      return $this->fechEven;
  }
  function getHoraEven() {
      return $this->horaEven;
  }
  function getNivelEven() {
      return $this->nivelEven;
  }
  function getUsuariosFaltantes() {
      return $this->usuariosFaltantes;
  }
  function getCerrado() {
      return $this->cerrado;
  }
  //Setters
  function setCodEven($codEven) {
      $this->codEven = $codEven;
  }
  function setCodPista($codPista) {
      $this->codPista = $codPista;
  }
  function setFechEven($fechEven) {
      $this->fechEven = $fechEven;
  }
  function setHoraEven($horaEven) {
      $this->horaEven = $horaEven;
  }
  function setNivelEven($nivelEven) {
      $this->nivelEven = $nivelEven;
  }
  function setUsuariosFaltantes($usuariosFaltantes) {
      $this->usuariosFaltantes = $usuariosFaltantes;
  }
  function setCerrado($cerrado) {
      $this->cerrado = $cerrado;
  }
  //Métodos de instancia
  public function insert() {
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO EVENTO (CodPista, FechEven, HoraEven, NivelEven, UsuariosFaltantes, Cerrado)"
            . " VALUES (\"".$this->codPista."\", \"".$this->fechEven."\", \"".$this->horaEven."\""
            . "\"".$this->nivelEven."\", \"".$this->usuariosFaltantes."\", \"".$this->cerrado."\")";
    $conexion->exec($insercion);
  }
  public static function insertaEvento($codpis, $fech, $hora, $nivel, $faltantes) {
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO EVENTO (CodPista, FechEven, HoraEven, NivelEven, UsuariosFaltantes)"
            . " VALUES (\"".$codpis."\", \"".$fech."\", \"".$hora."\","
            . "\"".$nivel."\", \"".$faltantes."\")";
    $conexion->exec($insercion);
  }
  public static function delete($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $borrado = "DELETE FROM EVENTO WHERE ".$atributo. "=\"".$valor."\"";
    $conexion->exec($borrado);
  }  
  public static function getEventos() {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodEven, CodPista, FechEven, HoraEven, NivelEven, UsuariosFaltantes, Cerrado"
            . " FROM EVENTO";
    $consulta = $conexion->query($seleccion);    
    $eventos= [];    
    while ($registro = $consulta->fetchObject()) {
      $eventos[] = new Evento($registro->CodEven, $registro->CodPista, $registro->FechEven, $registro->HoraEven, 
              $registro->NivelEven, $registro->UsuariosFaltantes, $registro->Cerrado);
    }   
    return $eventos;    
  }
  public static function update($cod, $fech, $hor, $ni, $us, $codEven) {
    $conexion = GoTeamDB::connectDB();
    $update = "UPDATE EVENTO SET CodPista=\"".$cod."\", FechEven=\"".$fech."\", HoraEven=\"".$hor."\", NivelEven=\"".
            $ni."\", UsuariosFaltantes=\"".$us."\"".
            " WHERE CodEven=".$codEven;
    $conexion->exec($update);
  }
  public static function getEvento($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodEven, CodPista, FechEven, HoraEven, NivelEven, UsuariosFaltantes, Cerrado"
            . " FROM EVENTO WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $evento = new Evento($registro->CodEven, $registro->CodPista, $registro->FechEven, $registro->HoraEven, 
              $registro->NivelEven, $registro->UsuariosFaltantes, $registro->Cerrado);
    return $evento;    
  }
  public static function getCodigoPistaEvento($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodEven, CodPista, FechEven, HoraEven, NivelEven, UsuariosFaltantes, Cerrado"
            . " FROM EVENTO WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $evento = $registro->CodPista;
    echo $evento;    
  }

}