<?php

require_once ('src/Deck.php');
require_once ('src/Player.php');

class Enemy {

    private int $healthPoints;
    private int $attack;
    private string $pip;
    private string $suit;

    public function __construct(int $healthPoints, int $attack, string $pip, string $suit){

        $this->$healthPoints = $healthPoints;
        $this->$attack = $attack;
        $this->$pip = $pip;
        $this->$suit = $suit;
    }

    /**
     * @return int
     */
    public function gethealthPoints() {
        return $this->healthPoints;
    }

    public function sethealthPoints($newHealthPoints) {
        $this->healthPoints = $newHealthPoints;
    }

    /**
     * @return int
     */
    public function getAttack(): int
    {
        return $this->attack;
    }

    
    public function setAttack($newAttack) {
        $this->attack = $newAttack;
    }

     /**
     * @return int
     */
    public function getPip(): string{
        return $this->pip;
    }

     /**
     * @return int
     */
    public function getsuit(): string{
        return $this->suit;
    }
}

class Regicide extends Deck
{
    private static array $pips = ['A', '2', '3', '4', '5', '6', '7', '8', '9', '10'];
    private static array $suits = ['♠', '♥', '♣', '♦'];

    private static array $castlePips = [
        'J' => ['attack' => 10, 'healthPoints' => 20],
        'Q' => ['attack' => 15, 'healthPoints' => 30],
        'K' => ['attack' => 20, 'healthPoints' => 40]
    ];

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
                $phase[] = new Enemy($castlePip['healthPoints'], $castlePip['attack'],$suit, key($castlePip));
            }
            //Shuffle the enemy suit group so the order is not always the same.
            shuffle($phase);
            $this -> castle[] = $phase;
        }

        $player = new Player();
        $this->drawHand($player, 1);
        $actualEnemy = array_pop($this->castle);

        dd($player->getHand());

    }

    public function drawHand($player, $nPlayers){
        $handsNumberPlayers = [
            1 => 8
        ];

        if(array_key_exists($nPlayers, $handsNumberPlayers)) {
            for ($i = 0; $i < $handsNumberPlayers[$nPlayers]; $i++) {
                $player-> addCardHand(array_pop($this->cards));
            }
        }
    }

    public function mulligan(){
        return true;
    }

    public function getCastle() {
        return $this->castle;
    }
}