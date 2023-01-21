<?php

namespace App\DataFixtures;

use App\Entity\Products;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Faker\Factory;

class ProductsFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {

        $faker = Factory::create('fr_FR');

        for ($products = 1; $products <= 2; $products++){

            $products_entrer = new products();
            $products_entrer->setName('Entrée');
            $products_entrer->setDescription($faker->text);
            $products_entrer->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_entrer->setActive(true);
            $manager->persist($products_entrer);

            $products_plat = new products();
            $products_plat->setName('Plat');
            $products_plat->setDescription($faker->text);
            $products_plat->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_plat->setActive(true);
            $manager->persist($products_plat);

            $products_dessert = new products();
            $products_dessert->setName('Dessert');
            $products_dessert->setDescription($faker->text);
            $products_dessert->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_dessert->setActive(true);
            $manager->persist($products_dessert);

            $products_burger = new products();
            $products_burger->setName('Burger');
            $products_burger->setDescription($faker->text);
            $products_burger->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_burger->setActive(true);
            $manager->persist($products_burger);

            $products_salade = new products();
            $products_salade->setName('Salade');
            $products_salade->setDescription($faker->text);
            $products_salade->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_salade->setActive(true);
            $manager->persist($products_salade);

            $products_poisson = new products();
            $products_poisson->setName('Poisson');
            $products_poisson->setDescription($faker->text);
            $products_poisson->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_poisson->setActive(true);
            $manager->persist($products_poisson);

            $products_menu = new products();
            $products_menu->setName('Menu');
            $products_menu->setDescription($faker->text);
            $products_menu->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_menu->setActive(true);
            $manager->persist($products_menu);

            $products_boisson_chaude = new products();
            $products_boisson_chaude->setName('Boisson Chaude');
            $products_boisson_chaude->setDescription($faker->text);
            $products_boisson_chaude->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_boisson_chaude->setQuantity($faker->shuffleArray([4, 25, 33, 50, 70]));
            $products_boisson_chaude->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_boisson_chaude->setActive(true);
            $manager->persist($products_boisson_chaude);

            $products_boisson_soft = new products();
            $products_boisson_soft->setName('Boisson Soft');
            $products_boisson_soft->setDescription($faker->text);
            $products_boisson_soft->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_boisson_soft->setQuantity($faker->shuffleArray([4, 25, 33, 50, 70]));
            $products_boisson_soft->setActive(true);
            $manager->persist($products_boisson_soft);

            $products_biere = new products();
            $products_biere->setName('Bière');
            $products_biere->setDescription($faker->text);
            $products_biere->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_biere->setQuantity($faker->shuffleArray([4, 25, 33, 50, 70]));
            $products_biere->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_biere->setActive(true);
            $manager->persist($products_biere);

            $products_vin = new products();
            $products_vin->setName('Vin');
            $products_vin->setDescription($faker->text);
            $products_vin->setPrice($faker->randomFloat(2, 1, 50));
            $products_vin->setQuantity($faker->shuffleArray([4, 25, 33, 50, 70]));
            $products_vin->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_vin->setActive(true);
            $manager->persist($products_vin);

            $products_cocktail = new products();
            $products_cocktail->setName('Cocktail');
            $products_cocktail->setDescription($faker->text);
            $products_cocktail->setPrice($faker->randomFloat(2, 1.5, 50));
            $products_cocktail->setQuantity($faker->shuffleArray([4, 25, 33, 50, 70]));
            $products_cocktail->setPercentAlcool($faker->randomFloat(1, 5.5, 8));
            $products_cocktail->setActive(true);
            $manager->persist($products_cocktail);
        }

        $manager->flush();
    }
}
