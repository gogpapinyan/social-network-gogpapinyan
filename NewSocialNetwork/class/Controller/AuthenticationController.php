<?php

namespace Controller;

use Model\AuthenticationModel;
use Model\ValidLoginModel;

class AuthenticationController
{
    private $validLogin;
    private $auth;

    public function __construct()
    {
        $this->validLogin = new ValidLoginModel();
        $this->auth = new AuthenticationModel();
    }

    public function actionLogin()
    {
        if (isset($_POST["signin_btn"])) {
            $this->auth->setUsername($_POST["user"]);
            $this->auth->setPassword($_POST["psw"]);
            if ($this->auth->isSignedup()) {
                session_start();
                $_SESSION[$this->auth->getUsername()] = "logged in";
                require "../view/user/profile.php";
            } else {
                $this->validLogin->setError("Wrong username or password");
                require "../view/user/signin.php";

            }
        }
    }

    public function actionLogout()
    {
        echo "logout!";
    }


}