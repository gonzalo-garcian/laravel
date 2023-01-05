<?php

require_once ('src/Deck.php');

class Regicide extends Deck
{
    private static array $pips = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
    private static array $suits = ['♠', '♥', '♣', '♦'];

    private static array $castlePips = ['J', 'Q', 'K'];

    private array $castle;

    public function __construct() {
        foreach (Regicide::$pips as $pip){
            foreach (Regicide::$suits as $suit){
                $this -> cards[] = new Card($suit, $pip);
            }
        }

        foreach (Regicide::$castlePips as $castlePip){
            foreach (Regicide::$suits as $suit){
                $this -> castle[] = new Card($suit, $castlePip);
            }
        }
    }
}