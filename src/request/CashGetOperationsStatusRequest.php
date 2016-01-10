<?php

namespace Alexboo\Wooppay\Request;


class CashGetOperationsStatusRequest
{
    /**
     * @var string $ext_id
     */
    public $ext_id;

    /**
     * @var int $status
     */
    public $status;

    /**
     * @var string $dateFrom
     */
    public $dateFrom;

    /**
     * @var string $dateTo
     */
    public $dateTo;
}