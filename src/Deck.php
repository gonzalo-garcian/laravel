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
        $string = '';
        $i = 0;
        foreach ($this->cards as $card){

            if($i === 4){
                $string .= '</p> <p>';
                $i = 0;
            }

            $string .= $card->get_suit() . '/' . $card->get_pip() . ' ';
            $i++;
        }
        echo '<p>' . $string;
        echo count($this->cards);
    }
}