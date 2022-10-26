<?php

namespace Creational\Builder\CarBuilder\Models;

class BMWCar extends Car
{
    private $data = [];

    public function setPart($name, $value){
        $this->data[$name] = $value;
    }
}