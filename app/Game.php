<?php declare(strict_types=1);

namespace App;

use App\Interfaces\GameInterface;
use App\Interfaces\GameRulesInterface;
use App\Interfaces\PlayerInterface;

class Game implements GameInterface
{
    protected PlayerInterface $player1;
    protected PlayerInterface $player2;
    protected GameRulesInterface $rules;

    /**
     * Game constructor.
     * @param PlayerInterface $player1
     * @param PlayerInterface $player2
     */
    public function __construct(GameRulesInterface $rules, PlayerInterface $player1, PlayerInterface $player2)
    {
        $this->player1 = $player1;
        $this->player2 = $player2;
        $this->rules = $rules;
    }

    public function play():int
    {
        $choice1 = $this->player1->getChoice();
        $choice2 = $this->player2->getChoice();

        return $this->rules->calcWinner($choice1, $choice2);
    }
}