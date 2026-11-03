<?php

namespace src\classes\state\order;

use src\interfaces\state\order\IState;

class Context
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
}
