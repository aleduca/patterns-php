<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class PrepareOrder implements IState
{
    public function __construct(private Context $context) {}

    public function preparingOrder()
    {
        $this->context->setState(new DeliverOrder($this->context));
        return "Order is being prepared.";
    }

    public function deliveringOrder()
    {
        throw new DomainException("Order is not being prepared yet.");
    }
}
