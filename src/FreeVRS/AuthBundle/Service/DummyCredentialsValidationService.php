<?php

namespace FreeVRS\AuthBundle\Service;

use FreeVRS\AuthBundle\Service\CredentialsValidator;
use FreeVRS\AuthBundle\Container\CredentialsContainer;
use FreeVRS\AuthBundle\Container\Auth;

class DummyCredentialsValidationService implements CredentialsValidator {

    /**
     * 
     * @return boolean
     */
    public function validate(CredentialsContainer $credentials) {

        $auth = new Auth;

        $authenticated = ($credentials->getUserName() === $credentials->getPassword());

        if ($authenticated) {
            $auth->isAuthenticated($authenticated);
            $auth->setUserName($credentials->getUserName());
            $auth->setUserRole(($credentials->getUserName() === Auth::ADMINISTRATOR) ? Auth::ADMINISTRATOR : Auth::REQUESTER);
        }

        return $auth;
    }

}
