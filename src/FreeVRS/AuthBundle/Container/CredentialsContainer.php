<?php

namespace FreeVRS\AuthBundle\Container;

class CredentialsContainer {
    
    protected $userName;
    protected $password;
    
    function __construct($userName, $password) {
        $this->userName = $userName;
        $this->password = $password;
    }
    
    public function getUserName() {
        return $this->userName;
    }

    public function getPassword() {
        return $this->password;
    }

    public function setUserName($userName) {
        $this->userName = $userName;
    }

    public function setPassword($password) {
        $this->password = $password;
    }


}
