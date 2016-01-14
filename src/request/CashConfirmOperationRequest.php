<?php

namespace Alexboo\Wooppay\Request;


class CashConfirmOperationRequest extends BaseRequest
{
    /**
     * @var int $operationId
     */
    public $operationId;
    /**
     * @var int $type
     */
    public $type;
}