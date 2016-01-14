<?php

namespace Alexboo\Wooppay\Request;


class PayConfirmRequest extends BaseRequest
{
    /**
     * @var string $PayCode
     */
    public $PayCode;
    /**
     * @var string $OperatorName
     */
    public $OperatorName;
    /**
     * @var string $OperatorCallCenter
     */
    public $OperatorCallCenter;
    /**
     * @var string $OperatorPayDate
     */
    public $OperatorPayDate;
    /**
     * @var string $NumberWallet
     */
    public $NumberWallet;
    /**
     * @var string $OperatorNumberTransaction
     */
    public $OperatorNumberTransaction;
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