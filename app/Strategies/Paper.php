<?php declare(strict_types=1);

namespace App\Strategies;


use App\Choice;
use App\Interfaces\ChoiceInterface;
use App\Interfaces\ChoiceStrategy;

class Paper implements ChoiceStrategy
{
    public function getChoice():ChoiceInterface
    {
        return new Choice(ChoiceInterface::NUMBER_PAPER);
    }
}