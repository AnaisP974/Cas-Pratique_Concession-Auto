<?php

namespace App\DataFixtures;

use App\Entity\Car;
use Doctrine\Persistence\ObjectManager;
use App\DataFixtures\CarCategoryFixtures;
use Doctrine\Bundle\FixturesBundle\Fixture;

class CarFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Lexus ES');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Traverse');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);
      
        $car = new Car();
        $car->setName('Toyota RAV4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(27000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Pilot');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(33000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Edge');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(29000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Lexus ES');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Traverse');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);
      
        $car = new Car();
        $car->setName('Toyota RAV4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(27000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Pilot');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(33000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Edge');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(29000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Lexus ES');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Traverse');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);
      
        $car = new Car();
        $car->setName('Toyota RAV4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(27000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Pilot');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(33000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Edge');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(29000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Lexus ES');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Traverse');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);
      
        $car = new Car();
        $car->setName('Toyota RAV4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(27000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Pilot');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(33000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Edge');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(29000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Lexus ES');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Traverse');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);
      
        $car = new Car();
        $car->setName('Toyota RAV4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(27000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Pilot');
        $car->setNbSeats(8);
        $car->setNbDoors(4);
        $car->setCost(33000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Edge');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(29000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Corolla');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda HR-V');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Toyota Tundra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
  
        $car = new Car();
        $car->setName('Subaru Legacy');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(22500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Kia Forte');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(18000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mazda CX-3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Honda Civic');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford Mustang');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(32000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Chevrolet Silverado');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);
       
        $car = new Car();
        $car->setName('Hyundai Kona');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Jetta');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(20500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz GLE');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(55000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Compass');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Nissan Altima');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(23500);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_BERLINE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW 3 Series');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(40000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi A4');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(38000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('Tesla Model S');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(80000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_ELECTRIQUE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Jeep Wrangler');
        $car->setNbSeats(4);
        $car->setNbDoors(2);
        $car->setCost(30);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Mercedes-Benz C-Class');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(45000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Audi Q7');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(52000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('BMW X3');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(43000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_LUXE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Dodge Challenger ');
        $car->setNbSeats(5);
        $car->setNbDoors(2);
        $car->setCost(30000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SPORTIVE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Volkswagen Golf');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(21000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Ford F-150');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(35000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_CAMIONNETTE));
        $manager->persist($car);

        $car = new Car();
        $car->setName('Hyundai Elantra');
        $car->setNbSeats(5);
        $car->setNbDoors(4);
        $car->setCost(19000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_COMPACTE));
        $manager->persist($car);
        
        $car = new Car();
        $car->setName('GMC Acadia');
        $car->setNbSeats(7);
        $car->setNbDoors(4);
        $car->setCost(31000);
        $car->setCategory($this->getReference(CarCategoryFixtures::CAR_CATEGORY_SUV));
        $manager->persist($car);

        $manager->flush();
    }
}