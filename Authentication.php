<?php
include("ValidationLogin.php");

class Authentication
{
    private $username;
    private $password;

    /**
     * @return mixed
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Authentication constructor.
     * @param $username
     * @param $password
     */

    public function __construct($username, $password)
    {
        $this->username = $username;
        $this->password = $password;
    }

    public function Login()
    {
        $validation = new ValidationLogin($this->username, $this->password);
        if ($validation->validLogin()) {
            session_start();
            return true;
        }
        return false;

    }

    public function Logout()
    {
        session_start();
        session_destroy();
        header("location: Signin.php");
    }
}