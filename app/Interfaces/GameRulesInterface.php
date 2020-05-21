<?php declare(strict_types=1);


namespace App\Interfaces;


interface GameRulesInterface
{
    public function calcWinner(ChoiceInterface $choice1, ChoiceInterface $choice2):int;
}