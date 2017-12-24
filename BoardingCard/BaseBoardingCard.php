<?php

namespace AlRowadsTest\BoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
abstract class BaseBoardingCard implements IBoardingCard {

    /**
     * get next boarding card
     * 
     * @var IBoardingCard
     */
    protected $next;

    /**
     * get previous boarding card
     * 
     * @var array
     */
    protected $previous;

    /**
     * get next boarding card
     * 
     * @return IBoardingCard
     */
    public function getNext() {
        return $this->next;
    }

    /**
     * set next boarding card
     * 
     * @param IBoardingCard $next
     */
    public function setNext(IBoardingCard $next) {
        $this->next = $next;
    }

    /**
     * get previous boarding card
     * 
     * @return IBoardingCard
     */
    public function getPrevious() {
        return $this->previous;
    }

    /**
     * set previous boarding card
     * 
     * @param IBoardingCard $previous
     */
    public function setPrevious(IBoardingCard $previous) {
        $this->previous = $previous;
    }

}
