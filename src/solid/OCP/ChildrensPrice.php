<?php

namespace App\solid\OCP;

use App\solid\Icontract\Price;

class ChildrensPrice implements Price
{
    public function getPrice(int $daysRented): float
    {
        $result = 1.5;
        if ($daysRented > 3) {
            $result += ($daysRented - 3) * 1.5;
        }
        return $result;
    }
}
