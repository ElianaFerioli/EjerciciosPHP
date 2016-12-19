<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Lagarto
 *
 * @author eli
 */
class Lagarto extends Animal{
    private $raza;
    private $nombreDePila;
    //Constructor
    public function __construct($nombre, $edad, $sexo, $raz, $pila) {
        parent::__construct($nombre, $edad, $sexo);
        $this->raza = $raz;
        $this->nombreDePila = $pila;
    }
    //Getters y setters
    function getRaza() {
        return $this->raza;
    }
    function getNombreDePila() {
        return $this->nombreDePila;
    }
    function setRaza($raza) {
        $this->raza = $raza;
    }
    function setNombreDePila($nombreDePila) {
        $this->nombreDePila = $nombreDePila;
    }
    //ToString
    public function __toString(){
        return "Soy ".$this->getNombre().", soy un lagarto y tengo ".$this->getEdad()." años y mi raza es ".$this->raza." Puedes llamarme: ".$this->nombreDePila;
    }
    //Métodos
    public function tomarSol(){
        echo "Voy a tirarme a tomar sol unas pocas de horas.";
    }
    public function noHacerNada(){
        echo "Como lagarto que soy, no hacer nada es mi especialidad.";
    }
    public function subirArama(){
        echo "Esa rama está muy alta, no pienso subir.";
    }
}
