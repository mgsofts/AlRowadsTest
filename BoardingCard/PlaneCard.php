<?php

namespace AlRowadsTest\BoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
class PlaneCard extends TrainCard {

    /**
     *
     * @var string
     */
    protected $gate;

    /**
     *
     * @var string
     */
    protected $notes;

    public function __construct() {
        parent::__construct();
    }

    /**
     * get notes
     * 
     * @return string
     */
    public function getNotes() {
        return $this->notes;
    }

    /**
     * set notes
     * 
     * @param string $notes
     */
    public function setNotes($notes) {
        $this->notes = $notes;
    }

    /**
     * get gate
     * 
     * @return string
     */
    public function getGate() {
        return $this->gate;
    }

    /**
     * set gate
     * 
     * @param string $gate
     */
    public function setGate($gate) {
        $this->gate = $gate;
    }

    /**
     * create plane boarding card
     * 
     * @param string $name
     * @param string $from
     * @param string $to
     * @param string $seat
     * @param string $gate
     * @param string $notes
     * @return \AlRowadsTest\BoardingCard\PlaneCard
     */
    public static function create($name, $from, $to, $seat) {
        return static::createPlaneCard($name, $from, $to, $seat, "", "");
    }

    /**
     * create plane boarding card
     * 
     * @param string $name
     * @param string $from
     * @param string $to
     * @param string $seat
     * @param string $gate
     * @param string $notes
     * @return \AlRowadsTest\BoardingCard\PlaneCard
     */
    public static function createPlaneCard($name, $from, $to, $seat, $gate, $notes) {
        $card = new self;
        $card->setName($name);
        $card->setFrom($from);
        $card->setTo($to);
        $card->setSeat($seat);
        $card->setGate($gate);
        $card->setNotes($notes);

        return $card;
    }

    /**
     * get string representation
     */
    public function __toString() {
        return "From {$this->from}, take flight {$this->name} to {$this->to}. Gate {$this->gate}, seat {$this->seat}. {$this->notes}";
    }

}
