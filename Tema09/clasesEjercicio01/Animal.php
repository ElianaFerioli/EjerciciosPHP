<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
abstract class Animal {
    private $nombre;
    private $edad;
    private $sexo;
    // Constructor
    public function __construct($nom, $ed, $s) {
    $this->nombre = $nom;
    $this->edad = $ed;
    $this->sexo = $s;
    }
    //Getters y setters
    function getNombre() {
        return $this->nombre;
    }
    function getEdad() {
        return $this->edad;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function setEdad($edad) {
        $this->edad = $edad;
    }
    function getSexo() {
        return $this->sexo;
    }
    function setSexo($sexo) {
        $this->sexo = $sexo;
    }
    //ToString
    public function __toString(){
        return "Soy ".$this->nombre." y tengo ".$this->edad." años.";
    }
    //Métodos
    public function comer() {
        if($this->sexo=="Hembra"){
            echo "Voy a comer verdurita que estoy con la operación bikini.";
        } else {
            echo "Voy a comerme una pizza barbacoa.";
        }
    }
    public function dormir(){
        echo "Voy a dormir un rato, hasta luego*ZZZZzZZZzzzZZZZzzzzZZZZzz*";
    }
    public function hablar(){
        echo "Los animales no hablamos ¿vale?";
    }
}
