<?php

namespace src\classes\state\order;

use src\interfaces\state\order\IState;

class ContextFactory
{
    public function __construct(private string $state) {}

    public function createState(): IState
    {
        return match ($this->state) {
            'preparing' => new PrepareOrder(),
            'delivering' => new DeliverOrder(),
            default => throw new \DomainException("Invalid state: {$this->state}"),
        };
    }
}
