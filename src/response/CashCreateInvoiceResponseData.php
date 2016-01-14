<?php

namespace Alexboo\Wooppay\Response;


class CashCreateInvoiceResponseData {
    /**
     * ID operations invoice
     * @var int $operationId
     * @soap
     */
    public $operationId;
    /**
     * Address forms of payment invoice which you want to redirect the user
     * @var string $operationUrl
     * @soap
     */
    public $operationUrl;
}