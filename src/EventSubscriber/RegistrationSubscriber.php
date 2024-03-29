<?php

namespace App\EventSubscriber;

use App\Event\RegistrationEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class RegistrationSubscriber implements EventSubscriberInterface
{
    public function onUserRegistration(RegistrationEvent $event): void
    {
        dump($event->getEmail());
    }

    public function onUserValid(RegistrationEvent $event): void
    {
        dump("user valid");
    }

    public static function getSubscribedEvents(): array
    {
        return [
            "user_registration" => 'onUserRegistration',
            "user_valid" => 'onUserValid',
        ];
    }
}
