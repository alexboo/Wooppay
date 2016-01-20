<?php

namespace Alexboo\Wooppay\Request;

class CoreLoginRequest extends BaseRequest {
    /**
     * Login in wooppay system
     * @var string $username
     * @soap
     */
    public $username;
    /**
     * Passowrd in wooppay service
     * @var string $password
     * @soap
     */
    public $password;
    /**
     * @var string $captcha
     * @soap
     */
    public $captcha = null;
}