<?php 

namespace App\solid\OCP;

use App\solid\Icontract\Price;

class RegularPrice implements Price
{
    public function getPrice(int $daysRented): float
    {
       $result = 2.0;
        if ($daysRented > 2) {
            $result += ($daysRented - 2) * 1.5;
        }
        return $result;
    }
}