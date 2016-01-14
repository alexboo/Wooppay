<?php

namespace Alexboo\Wooppay\Request;


class CashInvoicingRequest extends BaseRequest
{
    /**
     * @var string $subjectFrom
     */
    public $subjectFrom;

    /**
     * @var int $amount
     */
    public $amount;

    /**
     * @var int $lifetime
     */
    public $lifetime;

    /**
     * @var int $service_type
     */
    public $service_type;

    /**
     * @var int $device_type
     */
    public $device_type;

    /**
     * @var string $description
     */
    public $description;

    /**
     * @var string $order_nr
     */
    public $order_nr;
}