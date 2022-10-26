<?php 

namespace Creational\AbstractFactory\CarAbstractFactory;

class CarAbstractFactory
{

    private $Price;
    private $Tax = 100000;

    public function __construct($Price)
    {

        $this->Price = $Price;

    }

    public function CreateBMWCar() : BMWCar
    {

        return new BMWCar($this->Price);

    }

    public function CreateBenzCar() : BenzCar
    {

        return new BenzCar($this->Price, $this->Tax);

    }

}