<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class DeliveredOrder implements IState
{
	public function preparingOrder(Order $context)
	{
		throw new DomainException('Order is not being prepared yet.');
	}

	public function deliveringOrder(Order $context)
	{
		dump('Processing order preparation...') . PHP_EOL;
		$context->setState(new DeliveringOrder($context)); // transiciona o estado
	}

	public function deliveredOrder(Order $context)
	{
		throw new DomainException('Order is delivered.');
	}
}
