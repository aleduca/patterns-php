<?php

namespace src\classes\state\light;

use src\interfaces\state\light\IState;

class OnState implements IState
{
    public function __construct(private Context $context) {}

    public function turnLightOn()
    {
        return "The light is already on.";
    }

    public function turnLightOff()
    {
        $this->context->setState(new OffState($this->context));
        return "The light is now off.";
    }
}
