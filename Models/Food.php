<?php

require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Discanttable.php';



class Food extends Product
{
    use Discountable;
    protected $ingredients;

    function __construct(string $name, float $price, string $picture, Category $category, string $type, string $ingredients)
    {
        parent::__construct($name, $price, $picture, $category, $type);

        $this->ingredients = $ingredients;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }
}