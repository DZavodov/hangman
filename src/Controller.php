<?php
namespace DZavodov\hangman\Controller;
use function DZavodov\hangman\View\showGame;

function startGame(){
   echo "Game started" .PHP_EOL;
   showGame();
}
?>