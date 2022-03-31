<?php 
require_once 'Classes/Game.php';
require_once 'Classes/Player.php';
require_once 'Classes/Gobelet.php';
require_once 'Classes/Dice.php';

$game = new Game(5, new Gobelet());
$game -> setPlayers(new Player('Player 1'), new Player('Player 2'));
$game -> newGame(2);
$game->startGame();
?>