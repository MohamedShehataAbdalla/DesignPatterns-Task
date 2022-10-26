<?php

namespace Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Models\BMWCar;
use Creational\Builder\CarBuilder\Models\Car;

class BMWBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */

    private $type;
    public function createCar()
    {
        $this->type = new BMWCar();
    }

    public function addEngine()
    {
        $this->type->setPart('ENGINE','BM-engine');
    }

    public function addDoors()
    {
        $this->type->setPart('DOORS','BM-doors');
    }

    public function addBody()
    {
        $this->type->setPart('BODY','BM-body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL','BM-wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}