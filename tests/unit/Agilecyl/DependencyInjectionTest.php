<?php
namespace Tests\Unit\Agilecyl;

class DependencyInjectionTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->di = new \Pimple();
        $this->di['param'] = 'value';
    }
    /**
     * @test
     */
    public function initialParamValue()
    {
        $this->assertEquals('value',$this->di['param']);
    }

}