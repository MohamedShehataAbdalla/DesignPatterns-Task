<?php 

namespace Creational\AbstractFactory;

class BMWCar implements CarInterface
{

    private $Price;

    public function __construct($Price)
    {
        $this->Price = $Price;
    }

    public function calculatePrice()
    {
        return $this->price + 120000;
    }

}