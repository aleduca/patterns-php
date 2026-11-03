<?php

require __DIR__ . '/../vendor/autoload.php';

use src\classes\state\order\Context;
use src\classes\state\order\ContextFactory;
use src\classes\state\order\DeliverOrder;
use src\classes\state\order\PrepareOrder;
use src\enums\order\OrderState;

$state = 'delivering'; // Change this to 'preparing' or 'delivering' to test different states

// $context = new Context();

// light examples
// $context = new Context();
// echo $context->turnLightOn() . PHP_EOL; // The light is now on.
// echo $context->turnLightOn() . PHP_EOL; // The light is already on.
// echo $context->turnLightOff() . PHP_EOL; // The light is now off.

// Order examples
try {
    $context = new Context(new ContextFactory(OrderState::DELIVERING)->createState());
    // dd($context);
    // echo $context->preparingOrder() . PHP_EOL; // Order is being prepared.
    $context->deliveringOrder() . PHP_EOL; // Order is being delivered.
} catch (DomainException $e) {
    dd($e->getMessage());
}
