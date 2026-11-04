<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class DeliveringOrder implements IState
{
	public function preparingOrder(Order $context)
	{
		throw new DomainException('Order is already being delivered.');
	}

	public function deliveringOrder(Order $context)
	{
		dump('Order is ready') . PHP_EOL;
		$context->setState(new DeliveredOrder($context)); // transiciona o estado
	}

	public function deliveredOrder(Order $context)
	{
		throw new DomainException('Order is ready and already being delivered.');
	}
}
