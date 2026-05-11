<?php 
namespace App\solid\OCP;

use App\solid\Icontract\Price;

class NewReleasePrice implements Price
{
    public function getPrice(int $daysRented): float
    {
      return $daysRented * 3.0;
    }
}