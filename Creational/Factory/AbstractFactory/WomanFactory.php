<?php

namespace PHPDesignPattern\Factory\AbstractFactory;

class WomanFactory implements Factory
{
    public function createHuMan()
    {
        return new Woman();
    }

    public function createMonkey()
    {
        return new FemaleMonkey();
    }
}