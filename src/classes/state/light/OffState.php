<?php

namespace src\classes\state\light;

use src\interfaces\state\light\IState;

class OffState implements IState
{
	public function __construct(private LightBulb $context)
	{
	}

	public function turnLightOn()
	{
		$this->context->setState(new OnState($this->context));

		return 'The light is now on.';
	}

	public function turnLightOff()
	{
		return 'The light is already off.';
	}
}
