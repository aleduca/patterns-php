<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class DeliverOrder implements IState
{
    public function __construct(private Context $context) {}

    public function preparingOrder()
    {
        throw new DomainException("Order is already being prepared.");
    }

    public function deliveringOrder()
    {
        $this->context->setState(new DeliverOrder($this->context));
        return "Order is being delivered.";
    }
}
