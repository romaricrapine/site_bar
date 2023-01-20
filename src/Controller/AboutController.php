<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AboutController extends AbstractController
{
    #[Route('/about', name: 'app_about_user')]
    public function index(): Response
    {
        return $this->render('user/about.html.twig', [
            'controller_name' => 'AboutController',
        ]);
    }
}
