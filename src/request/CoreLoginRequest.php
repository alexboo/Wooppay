<?php

namespace Alexboo\Wooppay\Request;

class CoreLoginRequest {
    /**
     * @var string $username
     * @soap
     */
    public $username;
    /**
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