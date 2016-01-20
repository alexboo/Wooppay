<?php

namespace Alexboo\Wooppay\Request;

class CashGetOperationDataRequest extends BaseRequest {
    /**
     * Id array operations
     * @var int[] $operationId
     * @soap
     */
    public $operationId;
}