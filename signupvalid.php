<?php
$username = "";
$password = "";
if (isset($_POST["signup_btn"])) {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $name)) {
            $nameErr = "Use only letters";
        } else {
            $signUpSuccess++;
        }
    }

    if (empty($_POST["surname"])) {
        $surnameErr = "Surname is required";
    } else {
        $surname = test_input($_POST["surname"]);
        if (!preg_match("/^[a-zA-Z ]*$/", $surname)) {
            $surnameErr = "Use only letters";
        } else {
            $signUpSuccess++;
        }
    }

    if (empty($_POST["username"])) {
        $usernameErr = "Username is required";
    } else {
        $username = test_input($_POST["username"]);
        $signUpSuccess++;
    }

    if (empty($_POST["gender"])) {
        $genderErr = "     Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
        $signUpSuccess++;
    }

    if (empty($_POST["password"])) {
        $passwordErr = "Password is required";
    } else {
        $password = $_POST["password"];
        $signUpSuccess++;
    }
}
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

if ($signUpSuccess == 5) {
    $handle = fopen("username.txt", "a+");
    fwrite($handle, $username);
    $hash = password_hash($password, PASSWORD_BCRYPT);
    fwrite($handle, " $hash\n");
    fclose($handle);
}