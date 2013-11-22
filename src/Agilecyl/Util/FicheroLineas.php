<?php

namespace Agilecyl\Util;
/**
 * Description of FicheroLineas
 *
 * @author isidromerayo
 */
class FicheroLineas {
    private $fichero;
    public  function __construct($fichero) {
        $this->fichero = $fichero;
    }
    
    public function getFileContentAsArray() {
        return file_get_contents($this->fichero);
    }
}
