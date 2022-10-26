<?php

namespace Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Models\BenzCar;
use Creational\Builder\CarBuilder\Models\Car;

class BenzBuilder implements CarBuilderInterface
{

    /**
     * @var Car $type
     */

    private $type;
    public function createCar()
    {
        $this->type = new BenzCar();
    }

    public function addEngine()
    {
        $this->type->setPart('ENGINE','engine');
    }

    public function addDoors()
    {
        $this->type->setPart('DOORS','doors');
    }

    public function addBody()
    {
        $this->type->setPart('BODY','body');
    }

    public function addWheel()
    {
        $this->type->setPart('WHEEL','wheel');
    }

    public function getCar(): Car
    {
        return $this->type;
    }
}