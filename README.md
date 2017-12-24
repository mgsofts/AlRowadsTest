# AlRowadsTest

install composer dependecies using command
```
composer install
```

your entry point with index.php which contains how to use code.

BoardingCard contains interface IBoardingCard && base BaseBoardingCard to add new boarding cards types 
extend with same ways as BoardingCard\TrainCard, BoardingCard\BusCard, BoardingCard\PlaneCard

Exmaple usage:

## create collection of cards problem
```php
$problem = new AlRowadsTest\BoardingCardCollection();
```

## add some cards with different types and from & to
```php
$problem->addCard(PlaneCard::createPlaneCard('SK455', 'Gerona Airport', 'Stockholm', '3A', '45B', 'Baggage drop at ticket counter 344'))
        ->addCard(BusCard::create('airport bus', 'Barcelona', 'Gerona Airport', null))
        ->addCard(TrainCard::create('78A', 'Madrid', 'Barcelona', '45B'))
        ->addCard(PlaneCard::createPlaneCard('SK22', 'Stockholm', 'New York JFK', '7B', '22', 'Baggage will we automatically transferred from your last leg'));
```

## init solver object with problem and call solve
```php
$solution = (new \AlRowadsTest\BoardingCardSolver($problem))->solve();
```

## solver returns new collection sorted you can print or get as array
```php
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
```
