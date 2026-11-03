<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class DeliverOrder implements IState
{
    public function __construct(private Context $context) {}

    public function preparingOrder()
    {
        throw new DomainException("Order is already being delivered.");
    }

    public function deliveringOrder()
    {
        return "Order is being delivered.";
    }
}
