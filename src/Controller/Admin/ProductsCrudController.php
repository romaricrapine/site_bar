<?php

namespace App\Controller\Admin;

use App\Entity\Products;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\MoneyField;
use EasyCorp\Bundle\EasyAdminBundle\Field\PercentField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class ProductsCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Products::class;
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            TextField::new('name')->setLabel('Nom du produit'),
            TextEditorField::new('descriptions')->setLabel('Description du produit')->onlyOnForms(),
            TextField::new('name_f_options')->setLabel('Option 1'),
            MoneyField::new('price_f_options')->setCurrency('EUR')->setLabel('Prix Option 1'),
            BooleanField::new('first_options')->setLabel('On/Off'),
            TextField::new('name_s_options')->setLabel('Option 2'),
            MoneyField::new('price_s_options')->setCurrency('EUR')->setLabel('Prix Option 2'),
            BooleanField::new('second_options')->setLabel('On/Off'),
            TextField::new('name_t_options')->setLabel('Option 3'),
            MoneyField::new('price_t_options')->setCurrency('EUR')->setLabel('Prix Option 3'),
            BooleanField::new('third_options')->setLabel('On/Off'),
            PercentField::new('percent_alcool')->setLabel('Pourcentage d\'alcool')->onlyOnForms(),
            AssociationField::new('tagSubCatego')->setLabel('Lié à la sous-catégorie :')->onlyOnForms(),
            BooleanField::new('active')->setLabel('Activer ou désactiver le produit'),
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
            ->setPageTitle('index', 'Liste des produits')
            ->setPageTitle('edit', 'Modifier un produit')
            ->setPageTitle('new', 'Ajouter un produit')
            ->showEntityActionsInlined();
    }
}
