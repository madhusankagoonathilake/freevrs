<?php

namespace FreeVRS\ShuttleRoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller {

    public function indexAction() {
        return $this->render('FreeVRSShuttleRoutingBundle:Default:index.html.twig', array(
            'username' => $this->get('session')->get('auth')->getUserName(),
        ));
    }

}
