<?php declare(strict_types=1);


namespace App\Interfaces;


interface ChoiceInterface
{
    const STONE = "stone";
    const SCISSORS = "scissors";
    const PAPER = "paper";

    const NUMBER_STONE = 1;
    const NUMBER_SCISSORS = 2;
    const NUMBER_PAPER = 3;

    public function getNumberValue() : int;
    public function getHumanValue() : string;
}