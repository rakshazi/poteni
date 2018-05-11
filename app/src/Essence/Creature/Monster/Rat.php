<?php

declare(strict_types=1);

namespace App\Essence\Creature\Monster;

use App\Essence\Creature\Monster;

class Rat extends Monster
{
    public function getName(): string
    {
        $names = ['Seb', 'Mil', 'Oba', 'Zen', 'Noi'];

        return $names[\random_int(0, \count($names) - 1)].' the Rat';
    }

    public function getDescription(): string
    {
        return 'Just a rat';
    }

    public function getHealth(): float
    {
        return 10.0;
    }

    public function getMana(): float
    {
        return 0.0;
    }

    public function getAttack(): float
    {
        return \random_int(0, 2);
    }

    public function getDefense(): float
    {
        return \random_int(0, 1);
    }

    public function isAggressive(): bool
    {
        return true;
    }
}
