<?php

trait Discountable
{

    protected $discount;


    public function getDiscount()
    {
        return $this->discount;
    }

    public function setDiscount(int $discount)
    {
        if ($discount < 0 || $discount > 90) {

            throw new Exception("Lo sconto non può essere inferiore a 0 o superiore a 90");
        } else {

            $this->discount = $discount;
        }
    }

    public function getPrice()
    {

        return $this->price - $this->price * $this->discount / 100;
    }
}