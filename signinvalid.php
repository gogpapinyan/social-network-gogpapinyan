<?php
session_start();
$signInError = "";
$signInSuccess = false;
if (isset($_POST["signin_btn"])) {
    $user = $_POST["user"];
    $psw = $_POST["psw"];
    $handle = fopen("username.txt","r");
    while (!feof($handle)){
        $row = fgets($handle);
        $explodedRow = explode(" ", $row);
        if (is_array($explodedRow) && $user == $explodedRow[0] && password_verify($psw, trim($explodedRow[1]))) {
            $signInSuccess = true; break;
        }
    }
    if ($signInSuccess == false) {
        $signInError = "Wrong username or password";
    } else {
        $_SESSION["signin_user"] = $user;
        $_SESSION["status"] = "Logged In";
        header( "location: profile.php");

    }
}
