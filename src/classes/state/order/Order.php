<?php

namespace src\classes\state\order;

use src\interfaces\state\order\IState;

class Order
{
	private IState $state;

	public function __construct(IState $state)
	{
		$this->state = $state;
	}

	public function setState(IState $state)
	{
		$this->state = $state;
	}

	public function preparingOrder()
	{
		return $this->state->preparingOrder($this);
	}

	public function deliveringOrder()
	{
		return $this->state->deliveringOrder($this);
	}

	public function deliveredOrder()
	{
		return $this->state->deliveredOrder($this);
	}
}
