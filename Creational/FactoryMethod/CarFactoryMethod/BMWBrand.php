<?php

namespace Creational\FactoryMethod\CarFactoryMethod;

class BMWBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return "BMW Brand";
    }
}