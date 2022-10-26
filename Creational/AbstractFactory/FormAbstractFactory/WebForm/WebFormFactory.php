<?php

namespace Creational\AbstractFactory\FormAbstractFactory\WebForm;

use Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class WebFormFactory implements AbstractFormFactory
{

    public function createTextInput(): AbstractTextInput
    {
        // TODO: Implement createTextInput() method.
    }

    public function createTextArea(): AbstractTextArea
    {
        // TODO: Implement createTextArea() method.
    }

    public function createButton(): AbstractButton
    {
        // TODO: Implement createButton() method.
    }

    public function createWindow(): AbstractWindow
    {
        // TODO: Implement createWindow() method.
    }
}