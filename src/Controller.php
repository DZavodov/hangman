<?php
namespace Zavod\hangman\Controller;
use function Zavod\hangman\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>