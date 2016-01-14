<?php

namespace Alexboo\Wooppay\Request;


class CashCreateInvoiceExtendedRequest extends CashCreateInvoiceRequest
{
    /**
     * E-mail client (will be displayed in the form of payment in the payment card)
     * @var string $userEmail
     */
    public $userEmail;

    /**
     * Phone client (will be displayed in the form of payment in the payment card)
     * @var string $userPhone
     */
    public $userPhone;
}