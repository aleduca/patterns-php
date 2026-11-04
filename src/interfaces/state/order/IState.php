<?php

namespace src\interfaces\state\order;

use src\classes\state\order\Order;

interface IState
{
	public function preparingOrder(Order $context);
	public function deliveringOrder(Order $context);
}
