<?php

namespace Creational\AbstractFactory\FormAbstractFactory;

class AbstractWindow
{
    protected string $size;

    /**
     * @param string $size
     */
    public function __construct(string $size)
    {
        $this->size = $size;
    }

    /**
     * @return string
     */
    public function getSize(): string
    {
        return $this->size;
    }

    /**
     * @param string $size
     */
    public function setSize(string $size): void
    {
        $this->size = $size;
    }

    abstract public function onClose(): void;
    abstract public function onResize(): void;

}