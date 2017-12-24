<?php

namespace AlRowadsTest\BoardingCard;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
class BusCard extends TrainCard {

    public function __construct() {
        parent::__construct();
    }

    /**
     * create bus boarding card
     * 
     * @param string $name
     * @param string $from
     * @param string $to
     * @param string $seat
     * @return \AlRowadsTest\BoardingCard\BusCard
     */
    public static function create($name, $from, $to, $seat = null) {
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
        $result = "Take bus {$this->name} from {$this->from} to {$this->to}. ";

        if ($this->seat) {
            $result .= "Sit in seat {$this->seat}";
        } else {
            $result .= "No seat assignment";
        }

        return $result;
    }

}
