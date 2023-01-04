<?php

class Card
{
    private $suit;
    private $pip;

    public function __construct($suit, $pip){
        $this -> $suit = $suit;
        $this -> $pip  = $pip;
    }

    public function get_suit() {
        return $this -> $suit;
    }

    public function get_pip() {
        return $this -> $pip;
    }
}