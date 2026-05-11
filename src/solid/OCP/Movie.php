<?php 

namespace App\solid\OCP;

use App\solid\Icontract\Price;

class Movie
{
    public function __construct(private Price $price, private int $daysRented)
    {
    }
    public function getCharge(): float
    {
        return $this->price->getPrice($this->daysRented);
    }
}