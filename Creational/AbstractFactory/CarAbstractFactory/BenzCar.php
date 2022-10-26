<?php 

namespace Creational\AbstractFactory\CarAbstractFactory;


class BenzCar implements CarInterface
{

    private $Price;
    private $Tax;

    public function __construct($Price, $Tax)
    {
        $this->Price = $Price;
        $this->Tax = $Tax;
    }

    public function calculatePrice()
    {
        return $this->Price + $this->Tax + 200000;
    }
}