<?php

namespace App\Controller\Users;

use App\Repository\CategoriesRepository;
use App\Repository\ProductsRepository;
use App\Repository\SubCategoRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{

//    private CategoriesRepository $categoriesRepository;
//    private SubCategoRepository $subCategoRepository;
//    private ProductsRepository $productsRepository;
//
//    public function __construct(
//        CategoriesRepository $categoriesRepository,
//        SubCategoRepository $subCategoRepository,
//        ProductsRepository $productsRepository
//    )
//    {
//        $this->categoriesRepository = $categoriesRepository;
//        $this->subCategoRepository = $subCategoRepository;
//        $this->productsRepository = $productsRepository;
//    }

    #[Route('/', name: 'app_home_user')]
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
//            'categorie' => $this->categoriesRepository->findAll(),
//            'subCategorie' => $this->subCategoRepository->findAll(),
//            'product' => $this->productsRepository->findAll(),
        ]);
    }
}
