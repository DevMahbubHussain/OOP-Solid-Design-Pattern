<?php 

namespace App\solid\Icontract;

interface Price
{
    public function getPrice(int $daysRented): float;
}