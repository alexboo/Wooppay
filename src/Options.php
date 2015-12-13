<?php

namespace Alexboo\Wooppay;

use Alexboo\Wooppay\Exception\WooppayException;

class Options {

    public function __constructor($login, $password, $test = false)
    {
        if (empty($login) || empty($password)) {
            throw new WooppayException("Enter your login and password to access the service");
        }

        $this->login = $login;
        $this->password = $password;

        $this->test = $test;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return boolean
     */
    public function isTest()
    {
        return $this->test;
    }



    protected $login;
    protected $password;
    protected $test = false;
}