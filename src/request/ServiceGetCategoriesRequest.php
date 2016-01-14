<?php

namespace Alexboo\Wooppay\Request;


class ServiceGetCategoriesRequest extends BaseRequest
{
    /**
     * @var int $parent
     */
    public $parent;

    /**
     * @var string $modify_date
     */
    public $modify_date;
}