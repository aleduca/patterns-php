<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class PrepareOrder implements IState
{
    public function __construct(private Context $context) {}

    public function preparingOrder()
    {
        // PrepareOrder é o estado default, então não há necessidade de mudar o estado para PrepareOrder novamente.
        $this->context->setState(new DeliverOrder($this->context));
        return "Order has been prepared and is ready for delivery.";
    }

    public function deliveringOrder()
    {
        throw new DomainException("Order is not being prepared yet.");
    }
}
