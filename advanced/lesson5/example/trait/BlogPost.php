<?php

class BlogPost
{
    use Slugify;

    public string $title;

    public function getSlug(): string
    {
        return $this->createSlug($this->title);
    }
}