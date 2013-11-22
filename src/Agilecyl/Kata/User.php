<?php
namespace Agilecyl\Kata;

class User {
    private $email;
    private $password;
    
    public function __construct() {
        return $this;
    }
    public function email() {
        return $this->email;
    }
    public function setEmail($email) {
        $this->email = $email;
        return $this;
    }
    public function password() {
        return $this->password;
    }
    public function setPassword($password) {
        $this->password = $password;
        return $this;
    }
}
