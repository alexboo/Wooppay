<?php

namespace Alexboo\Wooppay\Request;


class CashPrepaidCardRequest extends BaseRequest
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