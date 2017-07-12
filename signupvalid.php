<?php
$nameErr = "";
$surnameErr = "";
$passwordErr = "";
$genderErr = "";
$birthdayErr = "";
$profPicErr = "";
if(isset($_POST['signup'])){
    if (empty($_POST["reg_name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["reg_name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $nameErr = "Use only letters";
        }
    }

    if (empty($_POST["name"])) {
        $surnameErr = "Surname is required";
    } else {
        $surname = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$surname)) {
            $surnameErr = "Use only letters";
        }
    }

    if (empty($_POST["gender"])) {
        $genderErr = "     Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }

    if (empty($_POST["reg_password"])) {
        $passwordErr = "Password is required";
    } else {
        $name = test_input($_POST["reg_password"]);
        if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
            $passwordErr = "Use only letters";
        }
    }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}