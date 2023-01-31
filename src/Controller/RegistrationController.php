<?php

namespace App\Controller;

use App\Event\RegistrationEvent;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\EventDispatcher\EventDispatcherInterface;

class RegistrationController extends AbstractController
{
    #[Route('/', name: 'app_registration')]
    public function index(EventDispatcherInterface $eventDispatcher): Response
    {
        $registrationEvent = new RegistrationEvent('remy.sainsard@gmail.com');
        $eventDispatcher->dispatch($registrationEvent, 'user_registration');

        return $this->render('registration/index.html.twig', [
            'controller_name' => 'RegistrationController',
        ]);
    }
}
