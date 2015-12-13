<?php

namespace Alexboo\Wooppay\Response;

class CoreLoginResponseData extends BaseResponse {
    /**
     * @var string session
     */
    public $session;
    /**
     * @var int id
     */
    public $id;
    /**
     * @var string username
     */
    public $username;
    /**
     * @var string login
     */
    public $login;
    /**
     * @var int type
     */
    public $type;
    /**
     * @var string[] roles
     */
    public $roles;
}