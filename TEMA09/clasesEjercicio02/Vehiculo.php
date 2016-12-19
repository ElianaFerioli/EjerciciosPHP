<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Vehiculo
 *
 * @author eli
 */
class Vehiculo {
    private static $kilometrosTotales = 0;
    private static $vehiculosCreados = 0;
    private $kilometrosRecorridos;
    //Constructor
    public function __construct(){
         $this->kilometrosRecorridos = 0;
         self::$vehiculosCreados += 1;
    }
    //Getters y setters
    static function getKilometrosTotales() {
        return self::$kilometrosTotales;
    }
    static function getVehiculosCreados() {
        return self::$vehiculosCreados;
    }
    function getKilometrosRecorridos() {
        return $this->kilometrosRecorridos;
    }
    static function setKilometrosTotales($kilometrosTotales) {
        self::$kilometrosTotales = $kilometrosTotales;
    }
    static function setVehiculosCreados($vehiculosCreados) {
        self::$vehiculosCreados = $vehiculosCreados;
    }
    function setKilometrosRecorridos($kilometrosRecorridos) {
        $this->kilometrosRecorridos = $kilometrosRecorridos;
    }
    //Métodos
    public function recorrer($x){
        $this->kilometrosRecorridos = $this->kilometrosRecorridos + $x;
        self::$kilometrosTotales += $x;
        echo "Acabo de subir mi kilometraje!";
    }
}