<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DadoPoker
 *
 * @author eli
 */
class DadoPoker {
    private static $tiradasTotales = 0;
    private $cara;
    //Contructor
    public function __construct(){
        
    }
    //Getters y setters
    function getCara() {
        return $this->cara;
    }
    function setCara($cara) {
        $this->cara = $cara;
    }
    static function getTiradasTotales() {
        return self::$tiradasTotales;
    }
        //Métodos
    public function tirar(){
        self::$tiradasTotales++;
        $alea = rand(0, 5);        
        return $alea;
    }
    public function nombreFigura(){
       $alea = $this->tirar(); 
       $cara = "";
        switch($alea){
            case 0:
                $cara = "As";
                break;
            case 1:
                $cara = "K";
                break;
            case 2:
                $cara = "Q";
                break;
            case 3:
                $cara = "J";
                break;
            case 4:
                $cara = "7";
                break;
            case 5:
                $cara = "8";
                break;
            default:
                break;
        }
        $this->cara = $cara;
    }


}
