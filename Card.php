<?php

class Card
{
    private string $suit;
    private string $pip;

    public function __construct($suit, $pip){
        $this -> $suit = $suit;
        $this -> $pip  = $pip;
    }

    public function get_suit() : string
    {
        return $this -> $suit;
    }

    public function get_pip() : string
    {
        return $this -> $pip;
    }
}