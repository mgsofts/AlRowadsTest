<?php

namespace AlRowadsTest\BoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
class TrainCard extends BaseBoardingCard {

    /**
     *
     * @var string 
     */
    protected $name;

    /**
     *
     * @var string 
     */
    protected $from;

    /**
     *
     * @var string 
     */
    protected $to;

    /**
     *
     * @var string 
     */
    protected $seat;

    /**
     * 
     */
    public function __construct() {
        
    }

    /**
     * get train name
     * 
     * @return string
     */
    public function getName() {
        return $this->name;
    }

    /**
     * set train name
     * 
     * @param string $name
     */
    public function setName($name) {
        $this->name = $name;
    }

    /**
     * get train from
     * 
     * @return string
     */
    public function getFrom() {
        return $this->from;
    }

    /**
     * set train from
     * 
     * @param string $from
     */
    public function setFrom($from) {
        $this->from = $from;
    }

    /**
     * get train to
     * 
     * @return string
     */
    public function getTo() {
        return $this->to;
    }

    /**
     * set train name
     * 
     * @param string $to
     */
    public function setTo($to) {
        $this->to = $to;
    }

    /**
     * get train seat
     * 
     * @return string
     */
    public function getSeat() {
        return $this->seat;
    }

    /**
     * set train seat
     * 
     * @param string $seat
     */
    public function setSeat($seat = null) {
        $this->seat = $seat;
    }

    /**
     * create train boarding card
     * 
     * @param string $name
     * @param string $from
     * @param string $to
     * @param string $seat
     * @return \AlRowadsTest\BoardingCard\TrainCard
     */
    public static function create($name, $from, $to, $seat) {
        $card = new self;
        $card->setName($name);
        $card->setFrom($from);
        $card->setTo($to);
        $card->setSeat($seat);

        return $card;
    }

    /**
     * get string representation
     */
    public function __toString() {
        return "Take train {$this->name} from {$this->from} to {$this->to}. Sit in seat {$this->seat}";
    }

}
