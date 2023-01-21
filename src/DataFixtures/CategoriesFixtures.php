<?php

namespace App\DataFixtures;

use App\Entity\Categories;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class CategoriesFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $categories_entrer = new Categories();
        $categories_entrer->setName('Entrée');
        $manager->persist($categories_entrer);

        $categories_plat = new Categories();
        $categories_plat->setName('Plat');
        $manager->persist($categories_plat);

        $categories_dessert = new Categories();
        $categories_dessert->setName('Dessert');
        $manager->persist($categories_dessert);

        $categories_burger = new Categories();
        $categories_burger->setName('Burger');
        $manager->persist($categories_burger);

        $categories_salade = new Categories();
        $categories_salade->setName('Salade');
        $manager->persist($categories_salade);

        $categories_poisson = new Categories();
        $categories_poisson->setName('Poisson');
        $manager->persist($categories_poisson);

        $categories_menu = new Categories();
        $categories_menu->setName('Menu');
        $manager->persist($categories_menu);

        $categories_boisson_chaude = new Categories();
        $categories_boisson_chaude->setName('Boisson Chaude');
        $manager->persist($categories_boisson_chaude);

        $categories_boisson_soft = new Categories();
        $categories_boisson_soft->setName('Boisson Soft');
        $manager->persist($categories_boisson_soft);

        $categories_biere = new Categories();
        $categories_biere->setName('Bière');
        $manager->persist($categories_biere);

        $categories_vin = new Categories();
        $categories_vin->setName('Vin');
        $manager->persist($categories_vin);

        $categories_cocktail = new Categories();
        $categories_cocktail->setName('Cocktail');
        $manager->persist($categories_cocktail);

        $manager->flush();
    }
}
