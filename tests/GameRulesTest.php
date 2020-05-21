<?php declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class GameRulesTest extends TestCase
{
    public function testCalcWinnerFirst():void {
        $gameRules = new \App\GameRules();

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $this->assertEquals(1, $gameRules->calcWinner($choice1, $choice2));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $this->assertEquals(1, $gameRules->calcWinner($choice1, $choice2));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $this->assertEquals(1, $gameRules->calcWinner($choice1, $choice2));
    }

    public function testCalcWinnerDraw():void {
        $gameRules = new \App\GameRules();

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $this->assertEquals(0, $gameRules->calcWinner($choice1, $choice2));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $this->assertEquals(0, $gameRules->calcWinner($choice1, $choice2));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $this->assertEquals(0, $gameRules->calcWinner($choice1, $choice2));
    }

    public function testCalcWinnerSecond():void {
        $gameRules = new \App\GameRules();

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $this->assertEquals(-1, $gameRules->calcWinner($choice2, $choice1));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_SCISSORS);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $this->assertEquals(-1, $gameRules->calcWinner($choice2, $choice1));

        $choice1 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_PAPER);
        $choice2 = new \App\Choice(\App\Interfaces\ChoiceInterface::NUMBER_STONE);
        $this->assertEquals(-1, $gameRules->calcWinner($choice2, $choice1));
    }
}