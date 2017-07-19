<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 23:15
 */

namespace Model;


class AuthenticationModel
{
    private $username;
    private $password;
    private $file;

    /**
     * AuthenticationModel constructor.
     */
    public function __construct()
    {
        $this->file = new FileModel();
        $this->file->setFileName("../DataBase/users.txt");
    }


    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * @param mixed $username
     */
    public function setUsername($username)
    {
        $this->username = $username;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function isSignedup()
    {
        if ($this->file->usernamePassswordExist($this->username, $this->password)) {
            return true;
        }
        return false;
    }


}