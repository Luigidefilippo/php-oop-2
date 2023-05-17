<?php

require_once __DIR__ . '/Category.php';


class Product
{

    protected $name;
    protected $price;
    protected $picture;
    protected $category;
    protected $type;

    function __construct(string $name, float $price, string $picture, Category $category, string $type)
    {

        $this->name = $name;
        $this->price = $price;
        $this->picture = $picture;
        $this->category = $category;
        $this->type = $type;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getPicture()
    {
        return $this->picture;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function getType()
    {
        return $this->type;
    }
}