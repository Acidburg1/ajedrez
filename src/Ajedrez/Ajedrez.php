<?php

namespace Ajedrez;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Ajedrez
 *
 * @author acidburg
 */
class Ajedrez {

    private $tablero;

    public function __construct() {
        //$this->
        //$this->iniciarTablero();
    }

    public function ponerFichaCasilla($x, $y, $ficha) {
        if (str_cmp($ficha) == "Alfil") {
            self::$tablero[$x][$y] = "A";
        }
    }

    public function devuelvePosicion($x, $y) {
        return self::$tablero[$x][$y];
    }

    public function iniciarTablero() {

        for ($a = 0; $a < 8; $a++) {
            for ($b = 0; $b < 8; $b++) {
                self::$tablero[$a][$b] = " ";
            }
        }
    }

//put your code here
}
