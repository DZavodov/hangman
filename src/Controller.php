<?php
namespace dzavodov\hangman\Controller;
use function dzavodov\hangman\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>