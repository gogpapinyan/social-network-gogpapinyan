<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 20:21
 */

namespace Controller;


use Model\FileModel;
use Model\UserModel;
use Model\ValidSignupModel;

class UserController
{
    private $user;
    private $validSignup;
    private $file;

    public function __construct()
    {
        $this->user = new UserModel();
        $this->validSignup = new ValidSignupModel();
        $this->file = new FileModel();
        $this->file->setFileName("../DataBase/users.txt");
    }

    public function actionCreate()
    {
        $errorCount = 0;
        if (isset($_POST["signup_btn"])) {
            if (!$this->validSignup->validName($_POST["name"])) {
                $errorCount++;
            } else {
                $this->user->setName($_POST["name"]);
            }
            if (!$this->validSignup->validSurname($_POST["surname"])) {
                $errorCount++;
            } else {
                $this->user->setSurname($_POST["surname"]);
            }
            if (!$this->validSignup->validEmail($_POST["email"])) {
                $errorCount++;
            } else {
                $this->user->setEmail($_POST["email"]);
            }
            if (!$this->validSignup->validUsername($_POST["username"])) {
                $errorCount++;
            } else {
                $this->user->setUsername($_POST["username"]);
            }
            if (!$this->validSignup->validPassword($_POST["password"])) {
                $errorCount++;
            } else {
                $this->user->setPassword($_POST["password"]);
            }
            if (!isset($_POST["gender"])) {
                $errorCount++;
                $this->validSignup->setGenderError("Gender is required");
            } else {
                $this->user->setGender($_POST["gender"]);
            }
            if ($errorCount) {
                require "../view/user/signin.php";
            } else {
                $this->file->writeInFile($this->user->getName());
                $this->file->writeInFile(" ");
                $this->file->writeInFile($this->user->getSurname());
                $this->file->writeInFile(" ");
                $this->file->writeInFile($this->user->getEmail());
                $this->file->writeInFile(" ");
                $this->file->writeInFile($this->user->getUsername());
                $this->file->writeInFile(" ");
                $this->file->writeInFile($this->user->getPassword());
                $this->file->writeInFile(" ");
                $this->file->writeInFile($this->user->getGender());
                $this->file->writeInFile("\n");
                $this->validSignup->setSignupSuccess("You're now the part of Twime. Now you need to login in");
                require "../view/user/signin.php";
            }
        }

    }

    public function actionProfile()
    {
        require '../view/user/profile.php';
    }

    public function actionUpdate()
    {
        echo "updated!";
    }

    public function actionDelete()
    {
        echo "Deleting existing user";
    }

    public function actionNew()
    {

        include "../view/user/signin.php";

    }

}