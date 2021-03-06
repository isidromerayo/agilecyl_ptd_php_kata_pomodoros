<?php

namespace Agilecyl\Kata;

/**
 * Generated by PHPUnit_SkeletonGenerator 1.2.1 on 2013-11-22 at 20:47:16.
 */
class CleanArrayTest extends \PHPUnit_Framework_TestCase {

    /** @test */
    public function stringWithInitialSpaces() {
        $data = array(' nombre');
        $expected = array('nombre');
        $this->assertEquals($expected, \Agilecyl\Kata\CleanArray::cleanData($data));
    }
    /** @test */
    public function stringWithFinalSpaces() {
        $data = array('nombre ');
        $expected = array('nombre');
        $this->assertEquals($expected, \Agilecyl\Kata\CleanArray::cleanData($data));
    }
    /** @test */
    public function stringWithSpacesOnlyRemoveFinalAndInitialSpaces() {
        $data = array(' nombre apellido1 apellido2 ');
        $expected = array('nombre apellido1 apellido2');
        $this->assertEquals($expected, \Agilecyl\Kata\CleanArray::cleanData($data));
    }
    
    

}
