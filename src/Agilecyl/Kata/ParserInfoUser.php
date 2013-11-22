<?php
namespace Agilecyl\Kata;

class ParserInfoUser {
    
    /**
     * 
     * @param string $line
     * @return \Agilecyl\Kata\User
     */
    public function rawUser($line) {
        $data = $this->cleanData($line);
        if (!empty($data[2])) {
            $user = new User();
            $user->setEmail($data[2])->setPassword($data[3]);
            return $user;
        }
    }
    
    private function cleanData($line) {
        $data = explode(';',$line);
        return array_map('trim',$data);
    }
}
