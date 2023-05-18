<?php
require_once __DIR__ . '/Product.php';
require_once __DIR__ . '/Category.php';
require_once __DIR__ . '/../Traits/Discanttable.php';

class Toy extends Product
{
    use Discountable;
    
    protected $material;

    function __construct(string $name, float $price, string $picture, Category $category, string $type, string $material)
    {
        parent::__construct($name, $price, $picture, $category, $type);

        $this->material = $material;
    }

    public function getMaterial()
    {
        return $this->material;
    }
}