<?php

namespace Alexboo\Wooppay\Request;


class CashCheckServiceFieldsRequest
{
    /**
     * @var string $service
     */
    public $service;

    /**
     * @var string $merchant
     */
    public $merchant;

    /**
     * @var int $serviceId
     */
    public $serviceId;

    /**
     * @var string $fields
     */
    public $fields;
}