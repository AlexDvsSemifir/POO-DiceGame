<?php 

require_once 'Classes/Gobelet.php';
require_once 'Classes/Player.php';
require_once 'Classes/Dice.php';

class Game {
    private $nb_tour;
    private $gobelet;
    private $players = [];

    public function __construct($nb_tour, Gobelet $gobelet) {
        $this->nb_tour = $nb_tour;
        $this->gobelet = $gobelet;
    }

    /**
     * Set as many players as you want and add them to the party
     * Every player will be added to an array of players
     * @param Player $player : array of players
     */
    public function setPlayers(...$players) {
        foreach($players as $player) {
            array_push($this->players, $player);
        }
    }

    /**
     * Call the newGame method of the Gobelet class
     */
    function newGame () {
        $this->gobelet->newGame(count($this->players));
    }

    /**
     * Call the newGame() method and the play() method of the players for each turn
     */
    function startGame () {
        $this->newGame();
        for ($i = 0; $i < $this->nb_tour; $i++) {
            echo "Tour " . ($i + 1) . " : " . '<br>';
            foreach ($this->players as $player) {
                echo $player->getName() . " " . '<br>';
                echo $player->play($this->gobelet) . " " . '<br>';
            }
            echo $this->getWinner() . '<br>';
        }
        echo $this->getFinalWinner();
        $this->resetGame();
    }

    /**
     * All the players go back to 0
     */
    function resetGame() {
        foreach ($this->players as $player) {
            $player->reset();
        }
    }

    /**
     * Return the winner of the turn
     */
    function getWinner() {
        $winner = $this->players[0];
        foreach ($this->players as $player) {
            if ($player->getScore() > $winner->getScore()) {
                $winner = $player;
            }
        }
        return $winner->getName() . " a gagné cette manche !" . '<br>';
    }

    /**
     * Return the winner of the game
     */
    function getFinalWinner() {
        $winner = $this->players[0];
        foreach ($this->players as $player) {
            echo $player->getName() . " : " . $player->getTotalScore() . '<br>';
            if ($player->getTotalScore() > $winner->getTotalScore()) {
                $winner = $player;
            }
        }
        return $winner->getName() . " a gagné la partie !";
    }

    /**
     * Return the value of the gobelet
     */
    function getValues () {
        return $this->gobelet->getValues();
    }
}
?>