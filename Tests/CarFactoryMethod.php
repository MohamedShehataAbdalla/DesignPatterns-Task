<?php
namespace Tests;

use Creational\FactoryMethod\CarFactoryMethod\BenzBrand;
use Creational\FactoryMethod\CarFactoryMethod\BenzBrandFactory;
use Creational\FactoryMethod\CarFactoryMethod\BMWBrand;
use Creational\FactoryMethod\CarFactoryMethod\BMWBrandFactory;
use PHPUnit\Framework\TestCase;

class CarFactoryMethod extends TestCase
{
    public function testCanBuildBMWBrand()
    {
        $brandFactory = new BMWBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf(BMWBrand::class, $myBrand);

    }

    public function testCanBuildBenzBrand()
    {
        $brandFactory = new BenzBrandFactory();
        $myBrand = $brandFactory->BuildBrand();

        $this->assertInstanceOf(BenzBrand::class, $myBrand);

    }
}