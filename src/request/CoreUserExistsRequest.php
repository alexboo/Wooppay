<?php

namespace Alexboo\Wooppay\Request;


class CoreUserExistsRequest extends BaseRequest
{
    /**
     * @var string $login
     */
    public $login;

    /**
     * @var int $userGroup
     */
    public $userGroup;
}