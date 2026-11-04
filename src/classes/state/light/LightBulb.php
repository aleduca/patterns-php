<?php

namespace src\classes\state\light;

use src\interfaces\state\light\IState;

class LightBulb
{
	private IState $state;

	public function __construct()
	{
		$this->state = new OffState($this); // estado inicial
	}

	public function setState(IState $state)
	{
		$this->state = $state;
	}

	public function turnLightOn()
	{
		return $this->state->turnLightOn();
	}

	public function turnLightOff()
	{
		return $this->state->turnLightOff();
	}
}
