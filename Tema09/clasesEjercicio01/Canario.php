<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Canario
 *
 * @author eli
 */
class Canario extends Ave {
    private $nombreDePila;
    //Constructor
    public function __construct($nombre, $edad, $sexo, $raza, $pila) {
        parent::__construct($nombre, $edad, $sexo, $raza);
        $this->nombreDePila = $pila;
    }
    //Getters y Setters
    function getNombreDePila() {
        return $this->nombreDePila;
    }
    function setNombreDePila($nombreDePila) {
        $this->nombreDePila = $nombreDePila;
    }
    //To String
    public function __toString(){
        return "Soy ".$this->getNombre().", soy un ave y tengo ".$this->getEdad()." años y mi raza es ".$this->getRaza().". Puedes llamarme: ".$this->nombreDePila;
    }
    //Métodos
   public function dormirAcostado(){
       echo "Soy un canario, no puedo dormir acostado.";
   }
   public function irAlaFuete(){
       echo "No voy a ir a la fuente a ver si se rompe...";
   }
   public function pararseEnCables(){
       echo "Voy a descansar un ratillo en esos cables de alta tensión.";
   }
   //Métodos sobrescritos
   public function volar(){
       echo "Soy un canario, prefiero volar bajito.";
   }
   
}
