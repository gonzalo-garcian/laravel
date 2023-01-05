<?php

require_once ('src/Deck.php');

class Regicide extends Deck
{
    private static array $pips = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
    private static array $suits = ['♠', '♥', '♣', '♦'];

    private static array $castlePips = ['J', 'Q', 'K'];

    private array $castle = [];

    public function __construct() {

        //Add enemy as a Card to the castle pile but only the [A-10] playable cards.
        foreach (Regicide::$pips as $pip){
            foreach (Regicide::$suits as $suit){
                $this -> cards[] = new Card($suit, $pip);
            }
        }
        //Shuffle the cards array so the tavern pile is not always the same.
        shuffle($this->cards);

        foreach (Regicide::$castlePips as $castlePip){
            $phase = [];
            foreach (Regicide::$suits as $suit){
                $phase[] = new Card($suit, $castlePip);
            }
            //Shuffle the enemy suit group so the order is not always the same.
            shuffle($phase);
            $this -> castle[] = $phase;
        }

        dd($this->castle);

    }

    public function getHand($nPlayers){
        $handsNumberPlayers = [
            1 => 8
        ];

    }
}