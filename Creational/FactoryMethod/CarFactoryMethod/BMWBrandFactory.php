<?php

namespace Creational\FactoryMethod\CarFactoryMethod;

class BMWBrandFactory implements BrandFactory
{

    public function BuildBrand()
    {
        return new BMWBrand();
    }
}