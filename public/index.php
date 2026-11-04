<?php

use src\classes\state\order\Order;
use src\classes\state\order\OrderFactory;
use src\enums\order\OrderState;

require __DIR__ . '/../vendor/autoload.php';

// light examples
// $context = new LightBulb();
// echo $context->turnLightOn() . PHP_EOL; // The light is now on.
// echo $context->turnLightOn() . PHP_EOL; // The light is already on.
// echo $context->turnLightOff() . PHP_EOL; // The light is now off.


try {
	$context = new Order(new OrderFactory(OrderState::PREPARING)->createState());
	dump($context);
	$context->preparingOrder();
	dump($context);
	$context->deliveringOrder();
	dump($context);
	$context->deliveredOrder();
} catch (\Throwable $th) {
	dump($th->getMessage());
}
