<?php
namespace Tests\Unit\Agilecyl;

class PointOfSaleMockTest  extends \PHPUnit_Framework_TestCase {
    
    /**
     * @test
     */
    public function onBarcode_search_catalog()
    {
        $catalog = $this->getMock('\Agilecyl\Dobles\Catalog', array('search'));
        $screen = $this->getMock('\Agilecyl\Dobles\Screen');
        
        $pointOfSale = new \Agilecyl\Dobles\PointOfSale($catalog, $screen);

        // verificar
        $catalog->expects($this->once())->method('search')->with('123');
                
        $pointOfSale->onBarcode('123');
    }
}
