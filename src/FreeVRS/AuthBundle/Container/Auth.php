<?php

namespace FreeVRS\AuthBundle\Container;

class Auth {
    
    const ADMINISTRATOR = 'admin';
    const REQUESTER = 'requester';

    protected $isAuthenticated = false;
    protected $userName;
    protected $userRole;

    /**
     * 
     * @param boolean $isAuthenticated
     * @return boolean
     */
    public function isAuthenticated($isAuthenticated = null) {
        if (is_null($isAuthenticated)) {
            return $this->isAuthenticated;
        } else {
            $this->isAuthenticated = (bool) $isAuthenticated;
        }
    }

    /**
     * 
     * @return string
     */
    public function getUserName() {
        return $this->userName;
    }

    /**
     * 
     * @param string $userName
     */
    public function setUserName($userName) {
        $this->userName = $userName;
    }

    /**
     * 
     * @return string
     */
    public function getUserRole() {
        return $this->userRole;
    }

    /**
     * 
     * @param string $userRole
     */
    public function setUserRole($userRole) {
        $this->userRole = $userRole;
    }

}
