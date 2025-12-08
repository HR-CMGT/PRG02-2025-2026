<?php

abstract class Character
{
    public string $name;
    public int $health = 100;


    //Shared logic voor all subclasses
    public function takeDamage($amount): void
    {
        $this->health -= $amount;
        if ($this->health < 0) $this->health = 0;
    }

    //Interface-like method, needs to be implemented by subclass
    abstract public function attack(): string;
}
