<?php declare(strict_types=1);

final class PaperStrategyTest extends \PHPUnit\Framework\TestCase
{
    public function testPaperReturnPaper() {
        $paperStrategy = new \App\Strategies\Paper();
        $choice = $paperStrategy->getChoice();
        $this->assertEquals(\App\Interfaces\ChoiceInterface::NUMBER_PAPER, $choice->getNumberValue());
        $this->assertEquals(\App\Interfaces\ChoiceInterface::PAPER, $choice->getHumanValue());
    }
}