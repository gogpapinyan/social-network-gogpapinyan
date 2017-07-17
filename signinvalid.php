<?php
include "Authentication.php";
$signInError = "";
if (isset($_POST["signin_btn"])) {
    $auth = new Authentication($_POST["user"], $_POST["psw"]);
    $username = $auth->getUsername();
    if (!$auth->Login()) {
        $signInError = "Wrong username or password";
    } else {
        $_SESSION[$username] = $username;
        header("location: profile.php");
    }
}

