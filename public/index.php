<?php

require __DIR__ . '/../vendor/autoload.php';

use src\classes\state\order\Context;

$state = 'processing';

if ($state === 'processing') {
} else if ($state === 'preparing') {
} else {
    echo "Invalid state.";
}

// light examples
// $context = new Context();
// echo $context->turnLightOn() . PHP_EOL; // The light is now on.
// echo $context->turnLightOn() . PHP_EOL; // The light is already on.
// echo $context->turnLightOff() . PHP_EOL; // The light is now off.

// Order examples
try {
    $context = new Context();
    echo $context->deliveringOrder() . PHP_EOL; // Order is being delivered.
    echo $context->preparingOrder() . PHP_EOL; // Order is being prepared.
} catch (DomainException $e) {
    dd($e->getMessage());
}
