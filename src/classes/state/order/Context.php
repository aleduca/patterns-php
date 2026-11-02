<?php

namespace src\classes\state\order;

use src\interfaces\state\order\IState;

class Context
{
    private IState $state;

    public function __construct()
    {
        $this->state = new PrepareOrder($this);
    }

    public function setState(IState $state)
    {
        $this->state = $state;
    }

    public function preparingOrder()
    {
        return $this->state->preparingOrder();
    }

    public function deliveringOrder()
    {
        return $this->state->deliveringOrder();
    }
}
