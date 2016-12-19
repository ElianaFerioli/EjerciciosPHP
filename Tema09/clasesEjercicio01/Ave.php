<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ave
 *
 * @author eli
 */
class Ave extends Animal{
    private $raza;
    //Constructor
    public function __construct($nombre, $edad, $sexo, $raz) {
        parent::__construct($nombre, $edad, $sexo);
        $this->raza = $raz;
    }
    //Gettesr y setters
    function getRaza() {
        return $this->raza;
    }
    function setRaza($raz) {
        $this->raza = $raz;
    }
    //ToString
    public function __toString(){
        return "Soy ".$this->getNombre().", soy un ave y tengo ".$this->getEdad()." años y mi raza es ".$this->raza;
    }
    //Métodos
    public function cantar(){
        if($this->getSexo()=="Hembra"){
            echo "Prepárate para el concierto...piPiPIPiPPipIpiPIPPipiPI";
        } else {
            echo "No he visto ninguna pajarita por aquí, no pienso cantar";
        }
    }
    public function empollar(){
        if($this->getSexo()=="Hembra"){
            echo "¿Donde están mis huevos?";
        } else {
            echo "¿Acaso me has visto cara de niña?";
        }
    }
    public function volar(){
        echo "Al infinito y más allá.....";
    }



        
}
