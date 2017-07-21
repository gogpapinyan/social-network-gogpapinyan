<?php
/**
 * Created by PhpStorm.
 * User: gogli
 * Date: 18.07.17
 * Time: 23:14
 */

namespace Model;


class ValidSignupModel
{
    private $nameError = "";

    private $surnameError = "";

    private $usernameError = "";

    private $emailError = "";

    private $passwordError = "";

    private $genderError = "";

    private $signupSuccess = "";


    public function validName(&$name)
    {
        if (empty($name)) {
            $this->nameError = "Name is required";
            return false;
        } else {
            $name = $this->testInput($name);
            if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
                $this->nameError = "Use only letters";
                return false;
            }
        }
        return true;
    }

    public function validSurname($surname)
    {
        if (empty($surname)) {
            $this->surnameError = "Surname is required";
            return false;
        } else {
            $surname = $this->testInput($surname);
            if (!preg_match("/^[a-zA-Z ]*$/", $surname)) {
                $this->surnameError = "Use only letters";
                return false;
            }
        }
        return true;
    }

    public function validUsername($username)
    {
        if (empty($username)) {
            $this->usernameError = "Surname is required";
            return false;
        } else {
            $username = $this->testInput($username);
            if (strlen($username) < 5) {
                $this->usernameError = "Username is too short(5 letters at least)";
                return false;
            }
            if (strlen($username) > 32) {
                $this->usernameError = "Username is too large(32 letters maximum)";
                return false;
            }
            if (!preg_match("/^[a-zA-Z0-9 -]*$/", $username)) {
                $this->usernameError = "Use only letters,numbers or -";
                return false;
            }
        }
        return true;
    }

    public function validGender($gender)
    {
        if (empty($gender)) {
            $this->genderError = "Gender is required";
            return false;
        } else {
            $this->testInput($gender);
        }
        return true;
    }

    public function validPassword($password)
    {
        if (empty($password)) {
            $this->passwordError = "Password is required";
            return false;
        } else {
            $password = $this->testInput($password);
            if (strlen($password) < 8) {
                $this->passwordError = "Password is too short(8 letters at least)";
                return false;
            }
            if (strlen($password) > 50) {
                $this->passwordError = "Password is too large(50 letters maximum)";
                return false;
            }
            if (!preg_match("/^[a-zA-Z0-9 -]*$/", $password)) {
                $this->passwordError = "Use only letters, numbers or -";
                return false;
            }
        }
        return true;
    }


    public function validEmail($email)
    {
        if (empty($email)) {
            $this->emailError = "Email is required";
            return false;
        } else {
            $email = $this->testInput($email);
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $emailError = "Invalid email format";
                return false;
            }
        }
        return true;
    }

    public function testInput($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * @return string
     */
    public function getNameError()
    {
        return $this->nameError;
    }

    /**
     * @return string
     */
    public function getSurnameError()
    {
        return $this->surnameError;
    }

    /**
     * @return string
     */
    public function getUsernameError()
    {
        return $this->usernameError;
    }

    /**
     * @return string
     */
    public function getEmailError()
    {
        return $this->emailError;
    }

    /**
     * @return string
     */
    public function getPasswordError()
    {
        return $this->passwordError;
    }

    /**
     * @return string
     */
    public function getGenderError()
    {
        return $this->genderError;
    }

    /**
     * @param string $nameError
     */
    public function setNameError($nameError)
    {
        $this->nameError = $nameError;
    }

    /**
     * @param string $genderError
     */
    public function setGenderError($genderError)
    {
        $this->genderError = $genderError;
    }

    /**
     * @return string
     */
    public function getSignupSuccess()
    {
        return $this->signupSuccess;
    }

    /**
     * @param string $signupSuccess
     */
    public function setSignupSuccess($signupSuccess)
    {
        $this->signupSuccess = $signupSuccess;
    }


}