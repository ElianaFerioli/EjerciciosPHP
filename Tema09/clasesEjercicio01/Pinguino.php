<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Pinguino
 *
 * @author eli
 */
class Pinguino extends Ave{
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
   public function nadar(){
       echo "Paso de nadar, hace mucho frio.";
   }
   public function deslizasePorElHielo(){
       echo "Wiiiiii...mírame mamá...Wiiiiiiiii";
   }
   public function protegerHembra(){
       if($this->getSexo()=="Hembra"){
            echo "Yo no necesito que nadie me proteja.";
        } else {
            echo "Como te acerques a mi hembra te pego un bofetazo, caranchoa...";
        }
   }
   //Métodos sobrescritos
   public function volar(){
       echo "¿Acaso me has visto cara de canario?";
   }
   public function cantar(){
       echo "Soy un pinguino!!! no puedo cantar!";
   }
}
