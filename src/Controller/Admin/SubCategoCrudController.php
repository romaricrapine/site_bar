<?php

namespace App\Controller\Admin;

use App\Entity\SubCatego;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class SubCategoCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return SubCatego::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Nom de la sous-catégories'),
            AssociationField::new('tagCatego')->setLabel('Lié à la catégorie :')
        ];
    }

    public function configureActions(Actions $actions): Actions
    {
        return $actions
            ->setPermission('delete', 'ROLE_ADMIN')
            ->setPermission(Action::BATCH_DELETE, 'ROLE_ADMIN');
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setPageTitle('index', 'Liste des sous-catégories')
            ->setPageTitle('edit', 'Modifier une sous-catégorie')
            ->setPageTitle('new', 'Ajouter une sous-catégorie')
            ->showEntityActionsInlined();
    }
}
