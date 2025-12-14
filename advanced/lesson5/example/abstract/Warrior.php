<?php

class Warrior extends Character
{
    public function attack(): string
    {
        return "$this->name swings a sword!";
    }
}