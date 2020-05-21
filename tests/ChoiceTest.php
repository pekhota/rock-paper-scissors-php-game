<?php declare(strict_types=1);

final class ChoiceTest extends \PHPUnit\Framework\TestCase
{
    public function testChoice() {
        $choice = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $this->assertEquals(\App\Interfaces\ChoiceInterface::NUMBER_PAPER, $choice->getNumberValue());
        $this->assertEquals(\App\Interfaces\ChoiceInterface::PAPER, $choice->getHumanValue());
    }
}