<?php

declare(strict_types=1);

namespace App;

use App\Essence\Origin;

class Action extends \Wtf\Root
{
    public function single(Origin $origin): string
    {
        $actions = [
            '%s found elven bee hive and laughed for a long time on long-eared bees',
            '%s ate strange red substance. Seems it was honey. Wrong honey...',
            'The Hobo Sapien told %s that it could not live without its habitual lyre. It was right, too.',
            'For once, %s decided to look before leap. Saw a bunch of jagged rocks, broken glass and upturned arrow heads. Leapt anyway.',
        ];

        return \sprintf($actions[\random_int(0, \count($actions) - 1)], $origin->getName());
    }

    public function duel(Origin $origin1, Origin $origin2): string
    {
        $actions = [
            '%s told to %s that it will be nice, if beings can talk to each other',
        ];

        return \sprintf($actions[\random_int(0, \count($actions) - 1)], $origin1->getName(), $origin2->getName());
    }
}
