<?php 
class Player {
    private $name;
    private $score;
    private $totalScore;

    public function __construct($name) {
        $this->name = $name;
        $this->score = 0;
    }

    /**
     * Return the scrore of the player
     */
    public function getScore() {
        return $this->score;
    }

    public function setScore($score) {
        $this->score = $score;
    }

    /**
     * @param Gobelet $gobelet : Game gobelet
     */
    public function play(Gobelet $gobelet) {
        $gobelet->roll();
        $this->score += $gobelet->getValues();
        $this->totalScore += $this->score;
        return $this->getScore();
    }

    public function __toString() {
        return $this->name . ': ' . $this->score;
    }

    /**
     * Reset the player's score and total score
     */
    public function reset() {
        $this->score = 0;
        $this->totalScore = 0;
    }

    /**
     * Return the name of the player
     */
    public function getName() {
        return $this->name;
    }

    /**
     * Add the turn's score to the total score
     */
    public function setTotalScore() {
        $this->totalScore += $this->score;
    }

    /**
     * Return the total score of the player
     */
    public function getTotalScore() {
        return $this->totalScore;
    }
}
?>