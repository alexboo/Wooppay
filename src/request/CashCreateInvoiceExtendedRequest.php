<?php

namespace Alexboo\Wooppay\Request;


class CashCreateInvoiceExtendedRequest extends CashCreateInvoiceRequest
{
    /**
     * @var string $userEmail
     */
    public $userEmail;

    /**
     * @var string $userPhone
     */
    public $userPhone;
}