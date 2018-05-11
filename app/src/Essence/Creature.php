<?php

declare(strict_types=1);

namespace App\Essence;

abstract class Creature extends Origin
{
    abstract public function getHealth(): float;

    abstract public function getMana(): float;

    abstract public function getAttack(): float;

    abstract public function getDefense(): float;

    abstract public function isAggressive(): bool;
}
