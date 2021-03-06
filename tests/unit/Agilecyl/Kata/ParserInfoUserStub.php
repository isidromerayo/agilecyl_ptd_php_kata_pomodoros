<?php
namespace Tests\Unit\Agilecyl\Kata;

class ParserInfoUserStub extends \PHPUnit_Framework_TestCase {
    
    /** @test */
    public function stubPHPUnit() {
        // Arrange
        $fileMock = $this->getMockBuilder('\Agilecyl\Util\FicheroLineas')
                     ->disableOriginalConstructor()
                     ->getMock();
        $fileMock->expects($this->any())
                ->method('getFileContentAsArray')
                ->will($this->returnValue($this->dataOneLine()));
        $parser = new \Agilecyl\Kata\ParserInfoUser();
        // Act
        $data = $fileMock->getFileContentAsArray();
        $user = $parser->rawUser($data);
        // Assert
        $this->assertEquals('juanperez@ejemplo.com',$user->email());
        $this->assertEquals('juan',$user->password());
    }
    /** @test */
    public function stubMockery() {
        $fileMock = \Mockery::mock('\Agilecyl\Util\FicheroLineas');
        $fileMock->shouldReceive('getFileContentAsArray')->once()->andReturn($this->dataOneLine());
        $parser = new \Agilecyl\Kata\ParserInfoUser();
        // Act
        $data = $fileMock->getFileContentAsArray();
        $user = $parser->rawUser($data);
        // Assert
        $this->assertEquals('juanperez@ejemplo.com',$user->email());
        $this->assertEquals('juan',$user->password());
    }
    /** @test */
    public function stubPhake() {
        $fileMock = \Phake::mock('\Agilecyl\Util\FicheroLineas');
        \Phake::when($fileMock)->getFileContentAsArray()->thenReturn($this->dataOneLine());
        $parser = new \Agilecyl\Kata\ParserInfoUser();
        // Act
        $data = $fileMock->getFileContentAsArray();
        $user = $parser->rawUser($data);
        // Assert
        $this->assertEquals('juanperez@ejemplo.com',$user->email());
        $this->assertEquals('juan',$user->password());
    }


    
    private function dataOneLine() {
        return 'juan;pérez peréz;juanperez@ejemplo.com;juan;[contabilidad,dirección]';
    }
}
