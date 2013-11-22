<?php

namespace Agilecyl\Kata;

/**
 * Description of CleanArray
 *
 * @author isidromerayo
 */
class CleanArray {
    
    static public function cleanData($data) {
        return array_map('trim', $data);
    }
}
