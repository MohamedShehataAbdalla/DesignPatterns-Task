<?php

namespace Creational\Builder\CarBuilder;

use Creational\Builder\CarBuilder\Models\Car;

class CarProducer
{
    /**
     * @var CarBuilderInterface
     */

    private $Builder;

    public function __constract(CarBuilderInterface $builder){
        $this->Builder = $builder;
    }

    public function ProducedCar(): Car{
        $this->Builder->createCar();
        $this->Builder->addBody();
        $this->Builder->addDoors();
        $this->Builder->addEngine();
        $this->Builder->addWheel();
        return $this->Builder->getCar();
    }
}