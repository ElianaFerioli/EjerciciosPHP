<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Bicicleta
 *
 * @author eli
 */
class Bicicleta extends Vehiculo{
    private $numeroDePlatos;
    //Constructor
    public function __construct($pla) {
        parent::__construct();
        $this->numeroDePlatos = $pla;
    }
    //Getters y setters
    function getNumeroDePlatos() {
        return $this->numeroDePlatos;
    }
    function setNumeroDePlatos($numeroDePlatos) {
        $this->numeroDePlatos = $numeroDePlatos;
    }
    function __toString() {
        return "Bicicleta de ".$this->numeroDePlatos." platos.";
    }
    //Métodos
    public function caballito(){
        echo "Mira mamá!!! sin manos!!!!!!.....ouch...";
    }
}
