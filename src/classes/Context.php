<?php

namespace src\classes;

use src\interfaces\IState;

class Context
{
    private IState $state;

    public function __construct()
    {
        $this->state = new OffState($this);
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
