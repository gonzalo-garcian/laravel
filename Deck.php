<?php

require_once ('Card.php');
class Deck
{

    protected array $cards;

    /**
     * @return array
     */
    public function getCards(): array
    {
        return $this->cards;
    }
}