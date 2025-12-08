<?php

class Archer extends Character
{
    public function attack(): string
    {
        return "$this->name shoots an arrow!";
    }
}