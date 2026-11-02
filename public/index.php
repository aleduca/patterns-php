<?php

require __DIR__ . '/../vendor/autoload.php';

use src\classes\state\light\Context;

// light examples
$context = new Context();
echo $context->turnLightOn() . PHP_EOL; // The light is now on.
echo $context->turnLightOn() . PHP_EOL; // The light is already on.
echo $context->turnLightOff() . PHP_EOL; // The light is now off.