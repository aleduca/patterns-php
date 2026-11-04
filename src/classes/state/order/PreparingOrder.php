<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class PreparingOrder implements IState
{
	public function preparingOrder(Order $context)
	{
		dump('Processing order preparation...') . PHP_EOL;
		$context->setState(new DeliveringOrder($context)); // transiciona o estado

		return 'Order has been prepared and is ready for delivery.';
	}

	public function deliveringOrder(Order $context)
	{
		throw new DomainException('Order is not being prepared yet.');
	}

	public function deliveredOrder(Order $context)
	{
		throw new DomainException('Order is not being prepared yet.');
	}
}
