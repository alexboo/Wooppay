<?php

namespace Alexboo\Wooppay\Request;


class CreateOperationRequest
{
    /**
     * @var string $Login
     */
    public $Login;
    /**
     * @var string $Password
     */
    public $Password;
    /**
     * @var string $KNO
     */
    public $KNO;
    /**
     * @var string $Beneficiary
     */
    public $Beneficiary;
    /**
     * @var string $Beneficiary_Ru
     */
    public $Beneficiary_Ru;
    /**
     * @var string $BankBeneficiary
     */
    public $BankBeneficiary;
    /**
     * @var string $BankBeneficiary_Ru
     */
    public $BankBeneficiary_Ru;
    /**
     * @var string $OrderDate
     */
    public $OrderDate;
    /**
     * @var string $PayCode
     */
    public $PayCode;
    /**
     * @var string $KBK
     */
    public $KBK;
    /**
     * @var string $KBK_Ru
     */
    public $KBK_Ru;
    /**
     * @var string $KNP
     */
    public $KNP;
    /**
     * @var string $KNP_Ru
     */
    public $KNP_Ru;
    /**
     * @var float $Price
     */
    public $Price;
    /**
     * @var string $LastName
     */
    public $LastName;
    /**
     * @var string $FirstName
     */
    public $FirstName;
    /**
     * @var string $MiddleName
     */
    public $MiddleName;
    /**
     * @var string $IIN
     */
    public $IIN;
    /**
     * @var string $Currency
     */
    public $Currency;
    /**
     * @var string $MerchantID
     */
    public $MerchantID;
    /**
     * @var string $BackURL
     */
    public $BackURL;
}