<?php
class Player
{

    public array $hand = [];

    public function getHand() : array{
        return $this -> hand;
    }

    public function addCardHand($element){
        $this -> hand[] = $element;
    }

}