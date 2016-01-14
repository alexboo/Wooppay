<?php

namespace Alexboo\Wooppay\Request;


class CashCheckServiceFieldsRequest extends BaseRequest
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