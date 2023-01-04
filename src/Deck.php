<?php

require_once ('src/Card.php');
class Deck
{
    protected array $cards;

    public function getCards(): array
    {
        return $this->cards;
    }

    public function cardsToString(){
        foreach ($this->cards as $card){
            echo  '<p>' . $card->get_suit() . '/' . $card->get_pip() . '</p>';
        }
        echo count($this->cards);
    }
}