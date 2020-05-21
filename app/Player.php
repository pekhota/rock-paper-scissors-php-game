<?php declare(strict_types=1);

namespace App;

use App\Interfaces\ChoiceInterface;
use App\Interfaces\ChoiceStrategy;
use App\Interfaces\PlayerInterface;

class Player implements PlayerInterface
{
    protected ChoiceStrategy $choiceStrategy;

    /**
     * Player constructor.
     * @param ChoiceStrategy $choiceStrategy
     */
    public function __construct(ChoiceStrategy $choiceStrategy)
    {
        $this->choiceStrategy = $choiceStrategy;
    }

    public function getChoice(): ChoiceInterface
    {
        return $this->choiceStrategy->getChoice();
    }
}