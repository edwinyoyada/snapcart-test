<?php

namespace Deadpool\APIBundle\Listener;

use Symfony\Component\Security\Core\AuthenticationEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Security\Core\Event\AuthenticationFailureEvent;
use Symfony\Component\Security\Http\Event\InteractiveLoginEvent;

class AuthenticationListener implements EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return array(
            AuthenticationEvents::AUTHENTICATION_FAILURE => 'onAuthenticationFailure',
            InteractiveLoginEvent::class => 'onAuthenticationSuccess',
        );
    }

    public function onAuthenticationFailure(AuthenticationFailureEvent $event)
    {
        // executes on failed login
    }

    public function onAuthenticationSuccess(InteractiveLoginEvent $event)
    {
        // executes on successful login
    }
}