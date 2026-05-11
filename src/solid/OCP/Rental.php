<?php 

namespace App\solid\OCP;

class Rental
{
    public function __construct(private Movie $movie, private int $daysRented)
    {
        $this->movie = $movie;
        $this->daysRented = $daysRented;
    }

    public function getCharge(): float
    {
        return $this->movie->getCharge();
    }
}