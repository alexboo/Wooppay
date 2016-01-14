<?php

namespace Alexboo\Wooppay\Request;


class CashRequestTransferRequest extends BaseRequest
{
    /**
     * @var string $login
     */
    public $login;
    /**
     * @var int $amount
     */
    public $amount;
    /**
     * @var string $description
     */
    public $description;
}