<?php

namespace Tests;

use Creational\Builder\CarBuilder\BenzBuilder;
use Creational\Builder\CarBuilder\BMWBuilder;
use Creational\Builder\CarBuilder\CarProducer;
use Creational\Builder\CarBuilder\Models\BenzCar;
use Creational\Builder\CarBuilder\Models\BMWCar;
use PHPUnit\Framework\TestCase;

class CarBuilder extends TestCase
{

    public function testProduceBMWCar()
    {
        $Builder = new BMWBuilder();
        $carProducer = new CarProducer($Builder);
        $myCar = $carProducer->ProducedCar();

        $this->assertInstanceOf(BMWCar::class, $myCar);

    }

    public function testProduceBenzCar()
    {
        $Builder = new BenzBuilder();
        $carProducer = new CarProducer($Builder);
        $myCar = $carProducer->ProducedCar();

        $this->assertInstanceOf(BenzCar::class, $myCar);
    }

}