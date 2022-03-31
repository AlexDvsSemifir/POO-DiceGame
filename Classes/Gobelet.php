<?php 
require_once 'Classes/Player.php';
require_once 'Classes/Dice.php';

class Gobelet {
    private $dices = [];

    /**
     * Créate as many dices as needed for the game
     * @param int $nb_dices : nombre de dès à créer
     */
    public function newGame(int $numberOfDice) {
        for ($i = 0; $i < $numberOfDice; $i++) {
            array_push($this->dices, new Dice());
        }
    }



    /**
     *  Call the roll() method of each dice
     */
    public function roll() {
        foreach ($this->dices as $dice) {
            $dice->roll();
        }
    }

    /**
     * Call the getValue() method of each dice and return the total value of the dices
     */
    public function getValues() {
        $value = 0;
        foreach ($this->dices as $dice) {
            $value += $dice->getValue();
        }
        return $value;
    }
}
?>