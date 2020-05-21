<?php declare(strict_types=1);

namespace App\Strategies;

use App\Choice;
use App\Interfaces\ChoiceInterface;
use App\Interfaces\ChoiceStrategy;

class Random implements ChoiceStrategy
{
    public function getChoice(): ChoiceInterface
    {
        $value = mt_rand(ChoiceInterface::NUMBER_STONE, ChoiceInterface::NUMBER_PAPER);
        return new Choice($value);
    }
}