<?php

require __DIR__.'/vendor/autoload.php';

use App\Player;

$player1 = new Player(new \App\Strategies\Random());
$player2 = new Player(new \App\Strategies\Paper());

$rules = new \App\GameRules();

for($i = 1; $i <= 100; $i++) {

    $game = new \App\Game($rules, $player1, $player2);
    $result = $game->play();

    $out = "Game {$i}: ";
    switch ($result) {
        case 1:
            $out .= "Player1 won";
            break;
        case 0:
            $out .= "draw";
            break;
        case -1:
            $out .= "Player2 won";
            break;
    }

    echo $out." \\".PHP_EOL;
}
