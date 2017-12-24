<?php

namespace AlRowadsTest;

use AlRowadsTest\BoardingCard\IBoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
class BoardingCardCollection implements \Iterator, \Countable {

    /**
     * list of boarding cards
     * 
     * @var array
     */
    protected $boardingCards = [];

    /**
     * iterator position
     * 
     * @var int
     */
    protected $position = 0;

    public function __construct() {
        
    }

    /**
     * add boarding card
     * 
     * @param \AlRowadsTest\IBoardingCard $boardingCard
     * @return \AlRowadsTest\BoardingCardCollection
     */
    public function addCard(IBoardingCard $boardingCard) {
        $this->boardingCards[] = $boardingCard;
        return $this;
    }

    /**
     * add boarding cards
     * 
     * @param mixed $boardingCards
     * @throws Exception\EmptyCardsException
     */
    public function addCards(IBoardingCard ...$boardingCards) {
        if (!$boardingCards) {
            throw new Exception\EmptyCardsException("No boarding cards to set!");
        }

        foreach ($boardingCards as $boardingCard) {
            $this->addCard($boardingCard);
        }
    }

    /**
     * set boarding cards
     * 
     * @param array|mixed $boardingCards
     * @throws Exception\EmptyCardsException
     */
    public function setCards(array $boardingCards) {
        if (!$boardingCards) {
            throw new Exception\EmptyCardsException("No boarding cards to set!");
        }

        $this->boardingCards = [];

        foreach ($boardingCards as $boardingCard) {
            $this->addCard($boardingCard);
        }
    }

    /**
     * get boarding cards
     * 
     * @return array
     */
    public function getCards() {
        return $this->boardingCards;
    }

    /**
     * get boarding cards count
     */
    public function count() {
        return count($this->boardingCards);
    }

    /**
     * get current iterator
     * 
     * @return type
     */
    public function current() {
        return $this->boardingCards[$this->position];
    }

    /**
     * get iterator key
     * 
     * @return \scalar
     */
    public function key() {
        return $this->position;
    }

    /**
     * seek next iterator
     */
    public function next() {
        ++$this->position;
    }

    /**
     * rewind iterator
     */
    public function rewind() {
        $this->position = 0;
    }

    /**
     * check is valid position iterator
     * 
     * @return bool
     */
    public function valid() {
        return isset($this->boardingCards[$this->position]);
    }

}
