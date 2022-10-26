<?php

namespace Creational\FactoryMethod\CarFactoryMethod;

class BenzBrand implements CarBrandInterface
{

    public function createBrand()
    {
        return "Benz Brand";
    }
}