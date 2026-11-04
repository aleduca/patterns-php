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
		throw new DomainException('Order is not being prepared yet.');
	}

	public function deliveredOrder(Order $context)
	{
		throw new DomainException('Order is delivered.');
	}
}
