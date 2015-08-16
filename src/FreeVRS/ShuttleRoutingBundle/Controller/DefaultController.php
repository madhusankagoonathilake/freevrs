<?php

namespace FreeVRS\ShuttleRoutingBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FreeVRS\AuthBundle\Container\Auth;

class DefaultController extends Controller {

    public function indexAction() {

        $authObj = $this->get('session')->get('auth');

        if ($authObj->getUserRole() === Auth::ADMINISTRATOR) {
            $response = $this->render('FreeVRSShuttleRoutingBundle:Default:todays-shuttle-schedule.html.twig', array(
            ));
        } else {
            $response = $this->render('FreeVRSShuttleRoutingBundle:Default:current-request-status.html.twig', array(
                'timeLeft' => '10 minutes',
            ));
        }

        return $response;
    }

    public function addTimeSlotAction() {
        return $this->render('FreeVRSShuttleRoutingBundle:Default:add-time-slot.html.twig', array());
    }
    public function viewTimeSlotAction($date, $time) {
        return $this->render('FreeVRSShuttleRoutingBundle:Default:time-slot.html.twig', array(
            'date' => $date,
            'time' => $time,
        ));
    }

}
