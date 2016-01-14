<?php

namespace Alexboo\Wooppay\Request;


class CashGetServiceFieldsRequest extends BaseRequest
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
     * @var string $fields
     */
    public $fields;
}