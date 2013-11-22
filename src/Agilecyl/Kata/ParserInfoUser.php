<?php

namespace Agilecyl\Kata;

class ParserInfoUser {

    /**
     * 
     * @param string $line
     * @return \Agilecyl\Kata\User
     */
    public function rawUser($line) {
        $data = explode(';', $line);
        $data = CleanArray::cleanData($data);
        if (!empty($data[2])) {
            $user = new User();
            $user->setEmail($data[2])->setPassword($data[3]);
            return $user;
        }
    }

}
