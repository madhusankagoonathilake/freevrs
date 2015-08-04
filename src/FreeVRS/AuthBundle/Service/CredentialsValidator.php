<?php

namespace FreeVRS\AuthBundle\Service;

use FreeVRS\AuthBundle\Container\CredentialsContainer;

interface CredentialsValidator {

    public function validate(CredentialsContainer $credentials);
}
