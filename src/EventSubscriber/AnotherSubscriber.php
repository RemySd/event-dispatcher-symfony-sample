<?php

namespace App\EventSubscriber;

use App\Event\RegistrationEvent;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

class AnotherSubscriber implements EventSubscriberInterface
{
    public function onUserRegistration(RegistrationEvent $event): void
    {
        dump("do nothing");
    }

    public static function getSubscribedEvents(): array
    {
        return [
            "user_registration" => 'onUserRegistration',
        ];
    }
}
