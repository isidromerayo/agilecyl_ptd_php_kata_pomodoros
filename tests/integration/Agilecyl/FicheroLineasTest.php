<?php

namespace Test\Integration\Agilecyl;

/**
 * Description of FicheroLineasTest
 *
 * @author isidromerayo
 */
class FicheroLineasTest extends \PHPUnit_Framework_TestCase {
    
    /** @test */
    public function fileExist() {
        $path = __DIR__ . '/../fixtures/usuarios_ok.txt';
        $file = new \Agilecyl\Util\FicheroLineas($path);
        $datos = $file->getFileContentAsArray();
        $this->assertNotNull($datos);
    }
    /** 
     * @test 
     * @expectedException Exception
     */
    public function fileNotExist() {
        $path = __DIR__ . '/../fixtures/fake_.txt';
        $file = new \Agilecyl\Util\FicheroLineas($path);
        $file->getFileContentAsArray();
    }
}
