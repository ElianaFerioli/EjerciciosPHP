<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Zona
 *
 * @author eli
 */
class Zona {
    private $nombre;
    private $numeroEntradas;
    //Constructor
    public function __construct($nom, $num) {
        $this->nombre = $nom;
        $this->numeroEntradas = $num;
    }
    //Getters y setters
    function getNumeroEntradas() {
        return $this->numeroEntradas;
    }
    function setNumeroEntradas($numeroEntradas) {
        $this->numeroEntradas = $numeroEntradas;
    }
    function getNombre() {
        return $this->nombre;
    }
    function setNombre($nombre) {
        $this->nombre = $nombre;
    }
    function __toString() {
        return "Nombre de la zona: ".$this->nombre."---Plazas disponibles: ".$this->numeroEntradas;
    }
    //Métodos
    public function vender($x){
        if($this->numeroEntradas>=$x){
            $this->numeroEntradas = $this->numeroEntradas - $x;
            echo "Transacción realizada, gracias por comprar.";
        } else if($this->numeroEntradas==0){
            echo "Lo sentimos, no hay plazas disponibles.";
        } else {
            echo "Lo sentimos, solo quedan ".$this->numeroEntradas." entradas disponibles";
        }
    }
}
