<?php

namespace Alexboo\Wooppay\Request;

class CashCreateInvoiceRequest extends BaseRequest {
    /**
     * Order ID on the side of the merchant
     * @var int $referenceId
     * @soap
     */
    public $reference_id;
    /**
     * The address to which the user will be redirected after payment
     * @var string $backUrl
     * @soap
     */
    public $back_url;
    /**
     * A request that we send to you after successful payment
     * @var string $requestUrl
     * @soap
     */
    public $request_url = '';
    /**
     * Line - that sees the client in the form of payment
     * @var string $addInfo
     * @soap
     */
    public $addInfo;
    /**
     * The amount of the invoice. Data Type - a real unsigned number with a separator-point (you can transfer integers)
     * @var float $amount
     * @soap
     */
    public $amount;
    /**
     * The time when the operation becomes invalid. Data Type - a string with the date (YYYY-MM-DD HH: MM: SS)
     * @var string $deathDate
     * @soap
     */
    public $deathDate;
    /**
     * Service name
     * @var $int $serviceType
     * @soap
     */
    public $service_name = null;
    /**
     * Merchant name
     * @var $int $serviceType
     * @soap
     */
    public $merchant_name = null;
    /**
     * Short mandatory comment that enters into the history of customer transactions
     * @var string $description
     * @soap
     */
    public $description = '';
    /**
     * Order ID. Data type - unsigned integer (not used)
     * @var int $orderNumber
     * @soap
     */
    public $orderNumber = null;
}