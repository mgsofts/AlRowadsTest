<?php

namespace AlRowadsTestTest;

use PHPUnit\Framework\TestCase;
use AlRowadsTest\BoardingCardSolver;
use AlRowadsTest\BoardingCardCollection;
use AlRowadsTest\BoardingCard\BusCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
final class BoardingCardSolverTest extends TestCase {

    public function testBoardingCards() {
        $boardingCards = [
            BusCard::create('4', 'asuit', 'luxor'),
            BusCard::create('2', 'giza', 'minia'),
            BusCard::create('1', 'cairo', 'giza'),
            BusCard::create('3', 'minia', 'asuit'),
            BusCard::create('5', 'luxor', 'aswan'),
        ];

        $collection = new BoardingCardCollection();
        $collection->setCards($boardingCards);

        $solver = new BoardingCardSolver($collection);
        $solution = $solver->solve();


        // all cards included
        $this->assertEquals($solution->count(), $collection->count());

        $id = 1;

        while ($solution->valid()) {
            $this->assertEquals($id, (int) $solution->current()->getName());
            
            $solution->next();
            ++$id;
        }
    }

}
