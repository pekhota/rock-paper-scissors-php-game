<?php declare(strict_types=1);

namespace App;

use App\Interfaces\ChoiceInterface;

class GameRules implements \App\Interfaces\GameRulesInterface
{
    protected function getRules():array {
        $rules = [
            ChoiceInterface::NUMBER_SCISSORS => ChoiceInterface::NUMBER_PAPER,
            ChoiceInterface::NUMBER_STONE => ChoiceInterface::NUMBER_SCISSORS,
            ChoiceInterface::NUMBER_PAPER => ChoiceInterface::NUMBER_STONE
        ];

        return $rules;
    }

    public function calcWinner($choice1, $choice2):int
    {
        $rules = $this->getRules();



        if($rules[$choice1->getNumberValue()] === $choice2->getNumberValue()) {
            return 1;
        }

        if($rules[$choice2->getNumberValue()] === $choice1->getNumberValue()) {
            return -1;
        }

        return 0;
    }
}