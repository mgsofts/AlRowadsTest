<?php

namespace AlRowadsTest;

/**
 * @author Mohamed Ghareeb <mohamedigm@gmail.com>
 */
class BoardingCardSolver {

    /**
     *
     * @var BoardingCardCollection 
     */
    protected $problem;

    /**
     *
     * @var BoardingCardCollection
     */
    protected $solution;

    /**
     * init solver
     * @param \AlRowadsTest\BoardingCardCollection $problem
     */
    public function __construct(BoardingCardCollection $problem) {
        $this->problem = $problem;
    }

    /**
     * solve boarding card problem solution
     * 
     * @return \AlRowadsTest\BoardingCardCollection
     */
    public function solve() {
        $this->solveProblem();
        return $this->solution;
    }

    /**
     * solve boarding card problem
     */
    protected function solveProblem() {
        $cards = $this->problem->getCards();

        /* @var $card BoardingCard\IBoardingCard */
        /* @var $scard BoardingCard\IBoardingCard */

        foreach ($cards as $card) {
            foreach ($cards as $scard) {
                if ($scard->getFrom() == $card->getTo()) {
                    $card->setNext($scard);
                    $scard->setPrevious($card);
                    break;
                }
            }
        }

        $this->solution = new BoardingCardCollection();

        $pevious_null_cards = array_values(array_filter($cards, function($item) {
                    return $item->getPrevious() == null;
                }));

        if ($pevious_null_cards) {
            $current_card = $pevious_null_cards[0];

            while ($current_card->getNext() != null) {
                $this->solution->addCard($current_card);
                $current_card = $current_card->getNext();
            }

            $this->solution->addCard($current_card);
        }
    }

}
