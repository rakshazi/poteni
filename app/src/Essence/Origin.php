<?php

declare(strict_types=1);

namespace App\Essence;

abstract class Origin extends \Wtf\Root
{
    abstract public function getName(): string;

    abstract public function getDescription(): string;
}
