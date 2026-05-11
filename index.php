<?php

require_once 'vendor/autoload.php';



use App\solid\OCP\RegularPrice;
use App\solid\OCP\ChildrensPrice;
use App\solid\OCP\NewReleasePrice;
use App\solid\OCP\Movie;
use App\solid\OCP\Rental;

$movie = new Movie(new RegularPrice(), 2);
$rental = new Rental($movie, 2);
echo "Amount for " . $rental->getCharge() . "\n";

$movie = new Movie(new ChildrensPrice(), 3);
$rental = new Rental($movie, 3);
echo "Amount for " . $rental->getCharge() . "\n";

$movie = new Movie(new NewReleasePrice(), 1);
$rental = new Rental($movie, 1);
echo "Amount for " . $rental->getCharge() . "\n";