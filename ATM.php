<?php

class ATM {
    private int $amount;

    public function __construct(int $amount)
    {
        $this->amount = $amount;
    }

    public function withdraw(int $withdrawal) : bool
    {
        if($this->amount < $withdrawal) return false;

        $this->amount -= $withdrawal;
        return true;
    }

    public function getAmount() : int
    {
        return $this->amount;
    }
}