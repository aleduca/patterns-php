<?php

namespace src\classes\state\order;

use DomainException;
use src\interfaces\state\order\IState;

class PrepareOrder implements IState
{
    public function preparingOrder(Context $context)
    {
        // PrepareOrder é o estado default, então não há necessidade de mudar o estado para PrepareOrder novamente.
        dump("Processing order preparation...") . PHP_EOL;
        $context->setState(new DeliverOrder($context)); // transiciona o estado
        return "Order has been prepared and is ready for delivery.";
    }

    public function deliveringOrder(Context $context)
    {
        throw new DomainException("Order is not being prepared yet.");
    }
}
