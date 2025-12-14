<?php

class Product
{
    use Slugify;

    public string $name;

    public function urlKey(): string
    {
        return $this->createSlug($this->name);
    }
}