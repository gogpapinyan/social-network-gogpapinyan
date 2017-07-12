<?php
if ($_POST["username"]) {
    $psw = trim($_POST["username"], " ");
}
if ($_POST["psw"]) {
    $username = trim($_POST["psw"]," ");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twime - Sign In</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
   <?php
   include("signinheader.php");
   ?>
    <div id="wrapper_signin">
        <div id="about" class="title">
            <span>
                The world in my eyes <br />
                Talk, share and react...
            </span>
        </div>
        <div id="sign_up">
            <p class="title">New to Twime? Register and share your best moments </p>
            <a href = "SignUp.php"><button type="submit" id="signup_btn">Sign up</button></a>
        </div>
    </div>
    <?php
    include("footer.php")
    ?>
</body>
</html>