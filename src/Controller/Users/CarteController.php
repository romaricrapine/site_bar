<?php

namespace App\Controller\Users;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarteController extends AbstractController
{
    #[Route('/carte', name: 'app_carte_user')]
    public function index(): Response
    {
        return $this->render('user/carte.html.twig', [
            'controller_name' => 'CarteController',
        ]);
    }
}
