<?php 

namespace Tests;

use Creational\AbstractFactory\CarAbstractFactory\BenzCar;
use Creational\AbstractFactory\CarAbstractFactory\BMWCar;
use Creational\AbstractFactory\CarAbstractFactory\CarAbstractFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactory extends TestCase
{
    public function testCanCreateBMWCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->CreateBMWCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);

    }

    public function testCanCreateBenzCar()
    {
        $carFactory = new CarAbstractFactory(200000);
        $myCar = $carFactory->CreateBenzCar();

        $this->assertInstanceOf(BenzCar::class , $myCar, "Car is not Benz");
    }
}