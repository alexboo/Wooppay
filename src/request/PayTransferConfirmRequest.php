<?php

namespace Alexboo\Wooppay\Request;


class PayTransferConfirmRequest extends BaseRequest
{
    /**
     * @var string $PayCode
     */
    public $PayCode;
    /**
     * @var string $BankName
     */
    public $BankName;
    /**
     * @var string $BankCallCenter
     */
    public $BankCallCenter;
    /**
     * @var string $BankPayDate
     */
    public $BankPayDate;
    /**
     * @var string $BankNumberTransaction
     */
    public $BankNumberTransaction;
    /**
     * @var float $Amount
     */
    public $Amount;
    /**
     * @var string $IIN
     */
    public $IIN;
    /**
     * @var string $KBK
     */
    public $KBK;
    /**
     * @var string $KBK_Ru
     */
    public $KBK_Ru;
    /**
     * @var string $KNO
     */
    public $KNO;
    /**
     * @var string $KNP
     */
    public $KNP;
    /**
     * @var string $KNP_Ru
     */
    public $KNP_Ru;
    /**
     * @var string $Commission
     */
    public $Commission;
    /**
     * @var string $MerchantID
     */
    public $MerchantID;
}