<?php declare(strict_types=1);

namespace App\Interfaces;

interface ChoiceStrategy
{
    public function getChoice():ChoiceInterface;
}