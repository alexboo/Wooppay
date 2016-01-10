<?php

namespace Alexboo\Wooppay\Request;


class CashPrepaidCardRequest
{
    /**
     * @var float $amount
     */
    public $amount;
    /**
     * @var string $login
     */
    public $login;
    /**
     * @var CashPrepaidCardRequestData $billingInfo
     */
    public $billingInfo;
}