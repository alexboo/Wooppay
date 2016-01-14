<?php

namespace Alexboo\Wooppay;

use Alexboo\Wooppay\Exception\WooppayException;

/**
 * List of settings for connection wooppay payment system API
 * Class Options
 * @package Alexboo\Wooppay
 */
class Options {

    /**
     * @param string $login - login for wooppay service
     * @param string $password - password for wooppay servoce
     * @param string|null $serverLogin - login for Basic access authentication
     * @param string|null $serverPassword - password for Basic access authentication
     * @param bool|false $isTest - set true if need test connection
     * @throws WooppayException
     */
    public function __construct($login, $password, $serverLogin = null, $serverPassword = null, $isTest = false)
    {
        if (empty($login) || empty($password)) {
            throw new WooppayException("Enter your login and password to access the service");
        }

        $this->login = $login;
        $this->password = $password;

        $this->serverLogin = $serverLogin;
        $this->serverPassword = $serverPassword;

        $this->test = (bool) $isTest;
    }

    /**
     * Get login for wooppay service
     * @return string
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Get password for wooppay service
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Return true if you using test connection for wooppay service
     * @return boolean
     */
    public function isTest()
    {
        return $this->test;
    }

    /**
     * Return login for Basic access authentication on wooppay service
     * @return string
     */
    public function getServerLogin()
    {
        return $this->serverLogin;
    }

    /**
     * Return password for Basic access authentication on wooppay service
     * @return string
     */
    public function getServerPassword()
    {
        return $this->serverPassword;
    }

    protected $login;
    protected $password;
    protected $serverLogin;
    protected $serverPassword;
    protected $test = false;
}