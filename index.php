<?php

// First Labour : Heracles vs Nemean Lion
// use your Figher class here

require_once 'src/Fighter.php';

$heracles = new Fighter('🧔 Heracles', 20, 6);

$lion = new Fighter('🦁 Lion', 11, 13);

$round = 1;

while($heracles->isAlive() && $lion->isAlive()) {
    echo '🕛 ROUND ' . $round . PHP_EOL;
    $heracles->fight($lion);
    $lion->fight($heracles);
    echo $heracles->getName() . ' 💙' . $heracles->getLife() . PHP_EOL;
    echo $lion->getName() . ' 💙' . $lion->getLife() . PHP_EOL;

    $round++;
}

if($heracles->isAlive()) {
    $winner = $heracles;
    $loser = $lion;
} else {
    $winner = $lion;
    $loser = $heracles;
}

 echo '🏆 '. $winner->getName() . ' is winner (💙'. $winner->getLife() .') and 💀 '. $loser->getName(). ' is dead';

