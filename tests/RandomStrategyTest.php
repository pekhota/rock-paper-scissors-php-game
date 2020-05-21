<?php declare(strict_types=1);

final class RandomStrategyTest extends \PHPUnit\Framework\TestCase
{
    public function testRandomStrategy() {
        $paperStrategy = new \App\Strategies\Random();

        $n = 20;
        $success1 = false;
        for($i = 0; $i < $n; $i++) {
            $choice = $paperStrategy->getChoice();
            if( $choice->getNumberValue() !== \App\Interfaces\ChoiceInterface::NUMBER_STONE) {
                $success1 = true;
                break;
            }
        }

        $success2 = false;
        for($i = 0; $i < $n; $i++) {
            $choice = $paperStrategy->getChoice();
            if( $choice->getNumberValue() !== \App\Interfaces\ChoiceInterface::NUMBER_SCISSORS) {
                $success2 = true;
                break;
            }
        }

        $success3 = false;
        for($i = 0; $i < $n; $i++) {
            $choice = $paperStrategy->getChoice();
            if( $choice->getNumberValue() !== \App\Interfaces\ChoiceInterface::NUMBER_PAPER) {
                $success3 = true;
                break;
            }
        }

        $this->assertTrue($success1 && $success2 && $success3);

    }
}