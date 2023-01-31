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

    public static function getSubscribedEvents(): array
    {
        return [
            "user_registration" => 'onUserRegistration',
        ];
    }
}
