<?php declare(strict_types=1);

namespace App;

use App\Exceptions\InvalidChoiceValueException;
use App\Interfaces\ChoiceInterface;

class Choice implements ChoiceInterface
{
    protected int $value;

    /**
     * Choice constructor.
     * @param int $value
     */
    public function __construct(int $value)
    {
        $this->value = $value;
    }

    public function getNumberValue(): int
    {
        return $this->value;
    }

    protected function map(int $value) : string {
        $map = [
            ChoiceInterface::NUMBER_STONE => ChoiceInterface::STONE,
            ChoiceInterface::NUMBER_SCISSORS => ChoiceInterface::SCISSORS,
            ChoiceInterface::NUMBER_PAPER => ChoiceInterface::PAPER
        ];

        if(!array_key_exists($value, $map)) {
            throw new InvalidChoiceValueException($value);
        }

        return $map[$value];
    }

    public function getHumanValue(): string
    {
        return $this->map($this->value);
    }
}