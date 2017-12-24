<?php

namespace AlRowadsTest\BoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
interface IBoardingCard {

    /**
     * get name
     */
    function getName();

    /**
     * get from source
     */
    function getFrom();

    /**
     * get destination
     */
    function getTo();

    /**
     * get next boarding card
     */
    function getNext();

    /**
     * set next boarding card
     * 
     * @param IBoardingCard $next
     */
    function setNext(IBoardingCard $next);

    /**
     * get previous boarding card
     */
    function getPrevious();

    /**
     * set previous boarding card
     * 
     * @param IBoardingCard $next
     */
    function setPrevious(IBoardingCard $previous);
}
