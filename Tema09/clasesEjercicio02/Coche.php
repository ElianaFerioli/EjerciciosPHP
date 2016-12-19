<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Coche
 *
 * @author eli
 */
class Coche extends Vehiculo {
    private $marca;
    //Constructor
    public function __construct($mar) {
        parent::__construct();
        $this->marca = $mar;
    }
    //Getters y setters
    function getMarca() {
        return $this->marca;
    }
    function setMarca($marca) {
        $this->marca = $marca;
    }
    function __toString() {
        return "Coche marca ".$this->marca;
    }
    //Métodos
    public function quemarRueda(){
        echo "Quemo ruedas tan bien que ya puedes llamarme cani, mira mira....";
    }
}
