<?php

namespace Alexboo\Wooppay\Request;


class CashRequestTransferRequest
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