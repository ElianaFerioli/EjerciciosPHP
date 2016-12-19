<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Perro
 *
 * @author eli
 */
class Perro extends Mamifero{
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
    public function jugarConLaPelota(){
        echo "Lánzame la pelota. Lánzame la pelota. Lánzame la pelota. Lánzame la pelota.";
    }
    public function rebuscarEnLaBasura(){
        echo "¿Has dicho queso podrido?¿Dónde?";
    }
    public function ardilla(){
        echo "ARDILLA!!";
    }
    //Métodos sobreescritos
    public function hablar(){
        echo "Voy a ladrar para ti: Guau Guau";
    }
}
