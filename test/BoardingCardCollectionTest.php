<?php

namespace AlRowadsTestTest;

use PHPUnit\Framework\TestCase;
use AlRowadsTest\BoardingCardCollection;
use AlRowadsTest\Exception\EmptyCardsException;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
final class BoardingCardCollectionTest extends TestCase {

    public function testEmptyException() {
        $this->expectException(EmptyCardsException::class);

        $collection = new BoardingCardCollection();
        $collection->addCards();
    }

}
