<?php
namespace Tests\Unit\Agilecyl;

class TemperatureStubTest extends \PHPUnit_Framework_TestCase
{
    /** @test */
    public function simpleStubWithPHPUnit()
    {
        $service = $this->getMock('\Agilecyl\ServiceInterface', array('readTemp'));
        $service->expects($this->any())
            ->method('readTemp')
            ->will($this->onConsecutiveCalls(10,12,14));
        $temperature = new \Agilecyl\Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
    /** @test */
    public function simpleStubWithMockery()
    {
        $service = \Mockery::mock('\Agilecyl\ServiceInterface');
        $service->shouldReceive('readTemp')->times(3)->andReturn(10, 12, 14);
        $temperature = new \Agilecyl\Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
    /** @test */
    public function simpleStubWithPhake()
    {
        $service = \Phake::mock('\Agilecyl\ServiceInterface');
        \Phake::when($service)->readTemp()->thenReturn(10)
                                            ->thenReturn(12)
                                            ->thenReturn(14);
        $temperature = new \Agilecyl\Temperature($service);
        $this->assertEquals(12, $temperature->average());
    }
            
}
