<?php

namespace Alexboo\Wooppay\Request;


class CashGetCommissionRequest extends BaseRequest
{
    /**
     * @var int $serviceId
     */
    public $serviceId;

    /**
     * @var int $amount
     */
    public $amount;
}