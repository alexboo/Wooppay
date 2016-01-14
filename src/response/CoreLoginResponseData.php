<?php

namespace Alexboo\Wooppay\Response;

class CoreLoginResponseData extends BaseResponse {
    /**
     * Session identifier
     * @var string session
     */
    public $session;
    /**
     * User ID
     * @var int id
     */
    public $id;
    /**
     * Name and last name
     * @var string username
     */
    public $username;
    /**
     * User type, possible values
     * @var int type
     */
    public $Type;
    /**
     * An array of user roles:
     * @var string[] roles
     */
    public $roles;
    /**
     * Avatars modification date (in the format "yyyy-mm-dd hh: mm: ss")
     * @var String $AvatarVersion
     */
    public $AvatarVersion;
    /**
     * Avatars file name (without the extension, all avatars extension "jpg")
     * @var String $avatarName
     */
    public $avatarName;
}