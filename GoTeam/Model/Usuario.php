<?php

require_once 'GoTeamDB.php';

class Usuario {
  //Atributos de instancia
  private $codUs;
  private $nomUs;
  private $passUs;
  private $emailUs;
  private $fechNac;
  private $provUs;
  private $localUs;
  private $descUs;
  private $fotoUs;  
  //Constructor
  function __construct($cod, $nom, $pass, $email, $fecha, $prov, $local, $desc, $foto) {
    $this->codUs = $cod;
    $this->nomUs = $nom;
    $this->passUs = $pass;
    $this->emailUs = $email;
    $this->fechNac = $fecha;
    $this->provUs = $prov;
    $this->localUs = $local;
    $this->descUs = $desc;
    $this->fotoUs = $foto;
  }
  //Getters
  function getCodUs() {
      return $this->codUs;
  }
  function getNomUs() {
      return $this->nomUs;
  }
  function getPassUs() {
      return $this->passUs;
  }
  function getEmailUs() {
      return $this->emailUs;
  }
  function getFechNac() {
      return $this->fechNac;
  }
  function getProvUs() {
      return $this->provUs;
  }
  function getLocalUs() {
      return $this->localUs;
  }
  function getDescUs() {
      return $this->descUs;
  }
  function getFotoUs() {
      return $this->fotoUs;
  }
  //Setters
  function setCodUs($codUs) {
      $this->codUs = $codUs;
  }
  function setNomUs($nomUs) {
      $this->nomUs = $nomUs;
  }
  function setPassUs($passUs) {
      $this->passUs = $passUs;
  }
  function setEmailUs($emailUs) {
      $this->emailUs = $emailUs;
  }
  function setFechNac($fechNac) {
      $this->fechNac = $fechNac;
  }
  function setProvUs($provUs) {
      $this->provUs = $provUs;
  }
  function setLocalUs($localUs) {
      $this->localUs = $localUs;
  }
  function setDescUs($descUs) {
      $this->descUs = $descUs;
  }
  function setFotoUs($fotoUs) {
      $this->fotoUs = $fotoUs;
  }
  //Métodos de instancia
  public static function insertNuevoUsuario($nom, $pass, $email, $fechnac, $prov, $local){
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO USUARIO (NomUs, PassUs, EmailUs, FechNac, ProvUs, LocaUs)"
            . " VALUES (\"".$nom."\", \"".$pass."\", \"".$email."\","
            . "\"".$fechnac."\", \"".$prov."\", \"".$local."\")";
    $conexion->exec($insercion);
  }
  public function insert() {
    $conexion = GoTeamDB::connectDB();
    $insercion = "INSERT INTO USUARIO (NomUs, PassUs, EmailUs, FechNac, ProvUs, LocaUs, DescUs, FotoUs)"
            . " VALUES (\"".$this->nomUs."\", \"".$this->passUs."\", \"".$this->emailUs."\""
            . "\"".$this->fechNac."\", \"".$this->provUs."\", \"".$this->localUs."\", \"".$this->descUs."\","
            . "\"".$this->fotoUs."\")";    
    $conexion->exec($insercion);
  }
  public static function update($cod, $nom, $pas, $ema, $fech, $prov, $loc) {
    $conexion = GoTeamDB::connectDB();
    $update = "UPDATE USUARIO SET NomUs=\"".$nom."\", PassUs=\"".$pas."\", EmailUs=\"".$ema."\", FechNac=\"".
            $fech."\", ProvUs=\"".$prov."\", LocaUs=\"".$loc."\"".
            " WHERE CodUs=".$cod;
    $conexion->exec($update);
  }
  public static function delete($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $borrado = "DELETE FROM USUARIO WHERE ".$atributo. "=\"".$valor."\"";
    $conexion->exec($borrado);
  }
  public static function verificaUsuario($nomUs){
    $existe = false;
    $conexion = GoTeamDB::connectDB();
    $consulta = "SELECT count(*) from USUARIO where NomUs=\"".$nomUs."\"";
    $resultado = $conexion->prepare($consulta); 
    $resultado->execute(); 
    if($resultado->fetchColumn()==1){
        $existe = true;
    }
    return $existe;
  }
  public static function verificaPassword($nomUs){
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT PassUs from USUARIO where NomUs=\"".$nomUs."\"";
    $consulta = $conexion->query($seleccion);    
    $pass = "";    
    while ($registro = $consulta->fetchObject()) {
        $pass = $registro->PassUs;
    }   
    return $pass;  
  }
  public static function verificaAdmin($nomUs){
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT Admin from USUARIO where NomUs=\"".$nomUs."\"";
    $consulta = $conexion->query($seleccion);    
    $resultado = false;    
    while ($registro = $consulta->fetchObject()) {
        if($registro->Admin==1){
            $resultado = true;
        }
    }   
    return $resultado;  
  }
  public static function getUsuarios() {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodUs, NomUs, PassUs, EmailUs, FechNac, ProvUs, LocaUs, DescUs, FotoUs"
            . " FROM USUARIO";
    $consulta = $conexion->query($seleccion);    
    $usuarios= [];    
    while ($registro = $consulta->fetchObject()) {
      $usuarios[] = new Usuario($registro->CodUs, $registro->NomUs, $registro->PassUs, $registro->EmailUs, 
              $registro->FechNac, $registro->ProvUs, $registro->LocaUs, $registro->DescUs, $registro->FotoUs);
    }   
    return $usuarios;    
  }  
  public static function getUsuario($atributo, $valor) {
    $conexion = GoTeamDB::connectDB();
    $seleccion = "SELECT CodUs, NomUs, PassUs, EmailUs, FechNac, ProvUs, LocaUs, DescUs, FotoUs"
            . " FROM USUARIO WHERE ".$atributo."=\"".$valor."\"";
    $consulta = $conexion->query($seleccion);
    $registro = $consulta->fetchObject();
    $usuario = new Usuario($registro->CodUs, $registro->NomUs, $registro->PassUs, $registro->EmailUs, 
              $registro->FechNac, $registro->ProvUs, $registro->LocaUs, $registro->DescUs, 
              $registro->FotoUs);
    return $usuario;    
  }

}

