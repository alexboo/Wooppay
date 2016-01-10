<?php

namespace Alexboo\Wooppay\Request;

class CashCreateOperationRequest {
    /**
     * @var int $type
     */
    public $type;
    /**
     * @var string $receiver
     */
    public $receiver;
    /**
     * @var float $amount
     */
    public $amount;
    /**
     * @var string $description
     */
    public $description;
    /**
     * @var int $productId
     */
    public $productId;
    /**
     * @var string $service
     */
    public $service;
    /**
     * @var string $fields
     */
    public $fields;
    /**
     * @var int $userGroup
     */
    public $userGroup;
}