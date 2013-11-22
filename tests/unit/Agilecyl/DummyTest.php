<?php
namespace Tests\Unit\Agilecyl;

class DummyTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     */
    public function sayHelloFabien()
    {
        $expected = 'Hello Fabien';
        $actual = \Agilecyl\Dummy::sayHello('Fabien');
        $this->assertEquals($expected, $actual);
    }
}
