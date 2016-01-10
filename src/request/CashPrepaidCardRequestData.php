<?php

namespace Alexboo\Wooppay\Request;


class CashPrepaidCardRequestData
{
    /**
     * @var string $name
     */
    public $name;
    /**
     * @var string $dateOfBirth
     */
    public $dateOfBirth;
    /**
     * @var string $documentNumber
     */
    public $documentNumber;
    /**
     * @var int $documentType
     */
    public $documentType;
    /**
     * @var string $dateOfIssue
     */
    public $dateOfIssue;
    /**
     * @var string $validity
     */
    public $validity;
    /**
     * @var string $personalNumber
     */
    public $personalNumber;
}