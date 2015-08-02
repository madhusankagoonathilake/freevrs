<?php

namespace FreeVRS\AuthBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FreeVRS\AuthBundle\Container\CredentialsContainer;

class DefaultController extends Controller {

    /**
     * 
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function loginAction() {
        return $this->render('FreeVRSAuthBundle:Default:login.html.twig');
    }
    
    
    public function validateCredentialsAction() {
        $request = \Symfony\Component\HttpFoundation\Request::createFromGlobals();
        $credentials = new CredentialsContainer($request->request->get('username'), $request->request->get('password'));
        $auth = $this->get('free_vrs_auth.credentials_validation_service')->validate($credentials);
        
        if ($auth->isAuthenticated()) {
            $this->get('session')->set('auth', $auth);
            return $this->redirect('/');
        } else {
            return $this->redirect('/retry-login');
        }
    }

}
