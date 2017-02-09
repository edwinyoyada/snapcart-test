<?php

namespace Deadpool\APIBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/login", name="login")
     */
    public function indexAction()
    {
        $authenticationUtils = $this->get('security.authentication_utils');
        $error = $authenticationUtils->getLastAuthenticationError();
        $lastUsername = $authenticationUtils->getLastUsername();

        return $this->render('DeadpoolAPIBundle:Default:index.html.twig', [
            'last_username' => $lastUsername,
            'error' => $error
        ]);
    }
}
