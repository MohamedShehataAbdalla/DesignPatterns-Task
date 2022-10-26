<?php

namespace Creational\Pool\CarPool;

class Car
{
    private $rentAt;

    public function __constract(){
        $this->rentAt = \DateTime();
    }

    public function moveCar(){
        return "Car is moving";
    }
}