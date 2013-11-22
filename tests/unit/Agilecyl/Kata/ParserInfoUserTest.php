<?php
namespace Tests\Unit\Agilecyl\Kata;

class ParserInfoUserTest extends \PHPUnit_Framework_TestCase {
    
    /** @test */
    public function parteUserRequireFields() {
        // Arrange
        $data = 'juan;pérez peréz;juanperez@ejemplo.com;juan;[contabilidad,dirección]
';
        $parser = new \Agilecyl\Kata\ParserInfoUser();
        // Act
        $user = $parser->rawUser($data);
        // Assert
        $this->assertEquals('juanperez@ejemplo.com',$user->email());
        $this->assertEquals('juan',$user->password());
        
    }
    /** @test*/
    public function parteUserRequireFieldsWithSpaces() {
        // Arrange
        $data = 'juan;pérez peréz; juanperez@ejemplo.com;juan;[contabilidad,dirección]
';
        $parser = new \Agilecyl\Kata\ParserInfoUser();
        // Act
        $user = $parser->rawUser($data);
        // Assert
        $this->assertEquals('juanperez@ejemplo.com',$user->email());
        $this->assertEquals('juan',$user->password());
        
    }
}
