<?php

namespace App\Controller\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class EventController extends AbstractController
{
    #[Route('/event', name: 'app_event_user')]
    public function index(): Response
    {
        return $this->render('user/event.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
