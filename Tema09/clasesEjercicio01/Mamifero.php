<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Mamifero
 *
 * @author eli
 */
class Mamifero extends Animal {
    private $raza;
    //constructor
    public function __construct($nombre, $edad, $sexo, $raza) {
        parent::__construct($nombre, $edad, $sexo);
        $this->raza = $raza;
    }
    //Getters y setters
    function getRaza() {
        return $this->raza;
    }
    function setRaza($raza) {
        $this->raza = $raza;
    }
    //To String
    public function __toString(){
        return "Soy ".$this->getNombre().", soy un mamífero, tengo ".$this->getEdad()." años y mi raza es ".$this->raza;
    }
    //Métodos
    public function amamantar(){
        if($this->getSexo()=="Hembra"){
            echo "No tengo niños para amamantar";
        } else {
            echo "¿Me has visto cara de nena?";
        }
    }
    public function beber(){
        echo "Me apetece un vaso de leche.";
    }
    public function cazar(){
       if($this->getSexo()=="Hembra"){
            echo "No voy a cazar, prefiero mantener la vida silvestre.";
        } else {
            echo "¿Has visto algo? Dime por donde que voy a pillarlo.";
        } 
    }



    
}
