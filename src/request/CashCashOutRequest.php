<?php

namespace Alexboo\Wooppay\Request;


class CashCashOutRequest
{
    /**
     * @var float $amount
     */
    public $amount;
    /**
     * @var string $returnURL
     */
    public $returnURL;
    /**
     * @var string $postLink
     */
    public $postLink;
    /**
     * @var string $extID
     */
    public $extID;
    /**
     * @var string $phone
     */
    public $phone;
    /**
     * @var string $addParams
     */
    public $addParams;
}