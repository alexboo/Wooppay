<?php

namespace Alexboo\Wooppay\Request;


class CashSetOperationsStatusRequestRecord extends BaseRequest
{
    /**
     * @var string $ext_id
     */
    public $ext_id;

    /**
     * @var string $description
     */
    public $description;

    /**
     * @var int $status
     */
    public $status;

    /**
     * @var string $date
     */
    public $date;
}