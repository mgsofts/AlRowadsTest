<?php

namespace AlRowadsTestTest;

use PHPUnit\Framework\TestCase;
use AlRowadsTest\BoardingCard\PlaneCard;
use AlRowadsTest\BoardingCard\TrainCard;
use AlRowadsTest\BoardingCard\BusCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
final class BoardingCardTest extends TestCase {

    public function testTrainCard() {
        $this->assertInstanceOf(
                TrainCard::class, TrainCard::create('78A', 'Madrid', 'Barcelona', '45B')
        );
    }

    public function testPlanCard() {
        $this->assertInstanceOf(
                PlaneCard::class, PlaneCard::create('SK455', 'Gerona Airport', 'Stockholm', '3A')
        );
    }

    public function testBusCard() {
        $this->assertInstanceOf(
                BusCard::class, BusCard::create('airport bus', 'Barcelona', 'Gerona Airport', null)
        );
    }

}
