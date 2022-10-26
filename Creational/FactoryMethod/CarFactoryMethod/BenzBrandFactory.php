<?php

namespace Creational\FactoryMethod\CarFactoryMethod;

class BenzBrandFactory implements BrandFactory
{

    public function BuildBrand()
    {
        return new BenzBrand();
    }
}