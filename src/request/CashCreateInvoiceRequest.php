<?php

namespace Alexboo\Wooppay\Request;

class CashCreateInvoiceRequest {
    /**
     * @var int $referenceId
     * @soap
     */
    public $referenceId;
    /**
     * @var string $backUrl
     * @soap
     */
    public $backUrl;
    /**
     * @var string $requestUrl
     * @soap
     */
    public $requestUrl = '';
    /**
     * @var string $addInfo
     * @soap
     */
    public $addInfo;
    /**
     * @var float $amount
     * @soap
     */
    public $amount;
    /**
     * @var string $deathDate
     * @soap
     */
    public $deathDate;
    /**
     * @var $int $serviceType
     * @soap
     */
    public $serviceType = null;
    /**
     * @var string $description
     * @soap
     */
    public $description = '';
    /**
     * @var int $orderNumber
     * @soap
     */
    public $orderNumber = null;
}