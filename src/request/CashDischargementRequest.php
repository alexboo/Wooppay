<?php

namespace Alexboo\Wooppay\Request;


class CashDischargementRequest {
    /**
     * @var string subjectFrom
     */
    public $subjectFrom;
    /**
     * @var int accountFrom
     */
    public $accountFrom;

    /**
     * @var float amount
     */
    public $amount;
}