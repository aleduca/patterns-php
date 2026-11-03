<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class DeliverOrder implements IState
{
    public function preparingOrder(Context $context)
    {
        throw new DomainException("Order is already being delivered.");
    }

    public function deliveringOrder(Context $context)
    {
        throw new DomainException("Order is already being delivered.");
    }
}
