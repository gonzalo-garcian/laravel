<?php
class Player
{

    private array $hand = [];

    public function getHand() : array{
        return $this -> hand;
    }

    public function addCardHand($element){
        $this -> hand[] = $element;
    }

}