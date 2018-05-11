<?php

declare(strict_types=1);
$root = __DIR__.'/..';
require $root.'/vendor/autoload.php';
if (\extension_loaded('session')) {
    \session_start();
}
$app = new \Wtf\App(['config_dir' => $root.'/config/']);
$action = new \App\Action($app->getContainer());
for ($i = 0; $i < 10; ++$i) {
    $rat = new \App\Essence\Creature\Monster\Rat($app->getContainer());
    $rat2 = new \App\Essence\Creature\Monster\Rat($app->getContainer());
    if ($i % 2) {
        echo $action->duel($rat, $rat2)."\n";
    } else {
        echo $action->single($rat)."\n";
    }
}
//$app->run();
