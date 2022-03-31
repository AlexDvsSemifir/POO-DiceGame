<?php 
class Dice {
    private $value = 0;

    /**
     * Roll the dice and get a random value between 1 and 6
     * @return int : new value of the dice
     */
    public function roll() {
        $this->value = rand(1, 6);
        return $this->getValue();
    }

    /**
     * Get the value of the dice
     * @return int
     */
    public function getValue(){
        return $this->value;
    }
}
?>