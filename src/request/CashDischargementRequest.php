<?php

namespace Alexboo\Wooppay\Request;


class CashDischargementRequest  extends BaseRequest
{
    /**
     * @var string $subjectFrom
     */
    public $subjectFrom;
    /**
     * @var int $accountFrom
     */
    public $accountFrom;

    /**
     * @var float $amount
     */
    public $amount;
}