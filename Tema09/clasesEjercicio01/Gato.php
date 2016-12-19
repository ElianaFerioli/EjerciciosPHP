<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Gato
 *
 * @author eli
 */
class Gato extends Mamifero{
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
        return "Soy ".$this->getNombre().", soy mamífero y tengo ".$this->getEdad()." años y mi raza es ".$this->getRaza().". Puedes llamarme: ".$this->nombreDePila;
    }
    //Métodos
    public function ronronear(){
        echo "grRRRrrrRRrRRRrRrRrRRrR";
    }
    public function meterseEnCajas(){
        echo "¿Has dicho caja?¿Dónde?";
    }
    public function arañar(){
        echo "Que bonitas cortinas tienes, voy a arreglarle los bajos.";
    }
    //Métodos sobreescritos
    public function hablar(){
        echo "Voy a maullar para ti: Miauuuuuuuuu";
    }
}
