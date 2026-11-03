<?php

namespace src\interfaces\state\order;

use src\classes\state\order\Context;

interface IState
{
    public function preparingOrder(Context $context);
    public function deliveringOrder(Context $context);
}
