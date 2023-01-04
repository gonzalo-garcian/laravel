<?php

require_once ('Card.php');

class Standard52 extends Deck
{
    private static array $pips = ['A', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', 'J', 'Q', 'K'];
    private static array $suits = ['♠', '♥', '♣', '♦'];

    public function __construct() {
        foreach (Standard52::$pips as $pip){
            foreach (Standard52::$suits as $suit){
                $this -> cards[] = new Card($suit, $pip);
            }
        }
    }
}