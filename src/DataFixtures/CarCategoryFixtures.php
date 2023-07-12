<?php

namespace App\DataFixtures;

use App\Entity\CarCategory;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarCategoryFixtures extends Fixture
{
    // -------------------------------------------------
    //                    PROPRIETES
    // -------------------------------------------------
    public const CAR_CATEGORY_COMPACTE = "car-category-compacte";
    public const CAR_CATEGORY_SUV = "car-category-suv";
    public const CAR_CATEGORY_CAMIONNETTE = "car-category-camionnette";
    public const CAR_CATEGORY_BERLINE = "car-category-berline";
    public const CAR_CATEGORY_SPORTIVE = "car-category-sportive";
    public const CAR_CATEGORY_LUXE = "car-category-luxe";
    public const CAR_CATEGORY_ELECTRIQUE = "car-category-electrique";

    // -------------------------------------------------
    //                     METHODES
    // -------------------------------------------------
    public function load(ObjectManager $manager): void
    {

        $carCategory = new CarCategory();
        $carCategory->setName('Compacte');
        $carCategory->setSlug('compacte');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_COMPACTE, $carCategory);

        $carCategory = new CarCategory();
        $carCategory->setName('SUV');
        $carCategory->setSlug('suv');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_SUV, $carCategory);

        $carCategory = new CarCategory();
        $carCategory->setName('Camionnette');
        $carCategory->setSlug('camionnette');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_CAMIONNETTE, $carCategory);

        $carCategory = new CarCategory();
        $carCategory->setName('Berline');
        $carCategory->setSlug('berline');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_BERLINE, $carCategory);
        
        $carCategory = new CarCategory();
        $carCategory->setName('Sportive');
        $carCategory->setSlug('sportive');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_SPORTIVE, $carCategory);
        
        $carCategory = new CarCategory();
        $carCategory->setName('Luxe');
        $carCategory->setSlug('luxe');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_LUXE, $carCategory);
        
        $carCategory = new CarCategory();
        $carCategory->setName('Electrique');
        $carCategory->setSlug('electrique');
        $manager->persist($carCategory);
        $this->addReference(self::CAR_CATEGORY_ELECTRIQUE, $carCategory);

        $manager->flush();
    }
}
