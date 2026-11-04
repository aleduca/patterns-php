<?php

namespace src\classes\state\order;

use src\interfaces\state\order\IState;

class OrderFactory
{
	public function __construct(private string $state)
	{
	}

	public function createState(): IState
	{
		return match ($this->state) {
			'preparing' => new PreparingOrder(),
			'delivering' => new DeliveringOrder(),
			'delivered' => new DeliveredOrder(),
			default => throw new \DomainException("Invalid state: {$this->state}"),
		};
	}
}
