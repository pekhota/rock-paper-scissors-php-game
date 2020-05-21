<?php declare(strict_types=1);

namespace App\Interfaces;

interface PlayerInterface
{
    public function getChoice():ChoiceInterface;
}