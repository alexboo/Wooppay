<?php

namespace Alexboo\Wooppay\Request;


class CashPrepaidCardPerformRequest extends BaseRequest
{
    /**
     * @var int $operationId
     */
    public $operationId;

    /**
     * @var string $protectionCode
     */
    public $protectionCode;
}