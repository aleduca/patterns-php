<?php

namespace src\interfaces\state\order;

interface IState
{
    public function preparingOrder();
    public function deliveringOrder();
}
