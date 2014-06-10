<?php

namespace Ajedrez\Test;

use Ajedrez\Ajedrez;
use Ficha\Ficha;

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AjedrezTest
 *
 * @author acidburg
 */
class AjedrezTest extends \PHPUnit_Framework_TestCase {

    private $ajedrez;
    private $ficha;

    protected function setUp() {
        parent::setUp();
        $this->ajedrez = new Ajedrez();
        $this->ficha = new Ficha();
    }

    function testSetup() {
        $this->assertTrue(true);
    }

    function testColocaFicha() {
        //$this->ajedrez->ponerFichaCasilla(0, 0, $this->ajedrez->ponerFichaCasilla($x, $y, $ficha));
        //  $this->assertEquals('A', $this->ajedrez->devuelvePosicion(0, 0));
    }

}
