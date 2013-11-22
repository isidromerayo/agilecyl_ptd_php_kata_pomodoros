<?php

namespace Tests\Unit\Agilecyl\Kata;

class CleanArrayDataProviderTest extends \PHPUnit_Framework_TestCase {

    
    public function provider() {
        return array(
            array(array(' nombre'),array('nombre')),
            array(array('nombre '),array('nombre')),
            array(array(' nombre apellido1 apellido2 '),array('nombre apellido1 apellido2'))
        );
    }
    
    /**
     * @test
     * @dataProvider provider
     */
    public function cleanSpacesStarFinish($data, $expected) {
        $this->assertEquals($expected, \Agilecyl\Kata\CleanArray::cleanData($data));
    }
}
