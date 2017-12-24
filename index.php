<?php

error_reporting(E_ALL);
ini_set("display_errors", 1);

// Composer autoloading
include __DIR__ . '/vendor/autoload.php';

/**
 * example solving boarding card problem
 */
use AlRowadsTest\BoardingCard\PlaneCard;
use AlRowadsTest\BoardingCard\TrainCard;
use AlRowadsTest\BoardingCard\BusCard;

$problem = new AlRowadsTest\BoardingCardCollection();
$problem->addCard(PlaneCard::createPlaneCard('SK455', 'Gerona Airport', 'Stockholm', '3A', '45B', 'Baggage drop at ticket counter 344'))
        ->addCard(BusCard::create('airport bus', 'Barcelona', 'Gerona Airport', null))
        ->addCard(TrainCard::create('78A', 'Madrid', 'Barcelona', '45B'))
        ->addCard(PlaneCard::createPlaneCard('SK22', 'Stockholm', 'New York JFK', '7B', '22', 'Baggage will we automatically transferred from your last leg'));

$solution = (new \AlRowadsTest\BoardingCardSolver($problem))->solve();

if ($solution->count() > 0) {
    while ($solution->valid()) {
        $key = $solution->key() + 1;
        echo "{$key}. {$solution->current()}. <br>";
        $solution->next();
    }

    ++$key;

    echo "{$key}. You have arrived at your final destination. <br>";
} else {
    echo "Failed to solve problem :)";
}
