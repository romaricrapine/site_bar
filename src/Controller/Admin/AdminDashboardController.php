<?php

namespace App\Controller\Admin;

use App\Entity\Administrateur;
use App\Entity\Categories;
use App\Entity\Products;
use App\Entity\SubCatego;
use EasyCorp\Bundle\EasyAdminBundle\Config\Assets;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminDashboardController extends AbstractDashboardController
{
    #[Route('/admin', name: 'app_home_admin')]
    public function index(): Response
    {
        return $this->render('admin/index.html.twig');

    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('B HDV');
    }

    public function configureMenuItems(): iterable
    {

        yield MenuItem::linkToDashboard('Dashboard', 'fa fa-home');

        yield MenuItem::section('Gérér les produits');
        yield MenuItem::subMenu('Produits', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Ajouter un Produit', 'fas fa-plus', Products::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Montrer les Produits', 'fas fa-eye', Products::class)
            ]);

        yield MenuItem::section('Gérer les sous-catégories');
        yield MenuItem::subMenu('Les sous-catégories', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Ajouter une sous-catégories', 'fas fa-plus', SubCatego::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Ajouter une sous-catégories', 'fas fa-eye', SubCatego::class)
            ]);

        yield MenuItem::section('Gérer les catégories');
        yield MenuItem::subMenu('Les catégories', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Ajouter une catégories', 'fas fa-plus', Categories::class)->setAction(Crud::PAGE_NEW),
                MenuItem::linkToCrud('Montrer les catégories', 'fas fa-eye', Categories::class)
            ]);

        yield MenuItem::section('Gérer l\'équipe');
        yield MenuItem::subMenu('L\'équipe du BHV', 'fas fa-bars')
            ->setSubItems([
                MenuItem::linkToCrud('Montrer l\'équipe', 'fas fa-eye', Administrateur::class)
            ]);

    }

    public function configureAssets(): Assets
    {
        return parent::configureAssets()
            ->addWebpackEncoreEntry('admin');
    }

}
