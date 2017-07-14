<?php
$nameErr = "";
$surnameErr = "";
$usernameErr = "";
$passwordErr = "";
$genderErr = "";
$signUpSuccess = 0;
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
   include ("signinvalid.php");
   include("signinheader.php");


   ?>
    <div id="wrapper_signin">
        <div id="about" class="title">
            <span>
                The world in my eyes <br />
                Talk, share and react...
            </span>
        </div>
        <?php include("signupvalid.php"); ?>
        <div id="sign_up">
            <form id="signup_form" action="Signin.php" method="post">
                <input id="regname" placeholder="Your name" name="name"> <span class="signup_error"><?php echo $nameErr ?></span>
                <input id="regsurname" placeholder="Your surname" name="surname"> <span class="signup_error"><?php echo $surnameErr ?></span>
                <input id="regusername" placeholder="Username" name="username"> <span class="signup_error"><?php echo $usernameErr ?></span>
                <input id="regpassword" placeholder="Password" type="password" name="password"><span class="signup_error"> <?php echo $passwordErr ?></span>
                <div id="gender">
                    <input type="radio" value="Male" name="gender" id="male">
                    <label for="male">Male</label>

                    <input type="radio" value="Female" name="gender" id="female">
                    <label for="female">Female</label>
                </div> <span class="signup_error"> <?php echo $genderErr ?></span>
                <input id="signup_btn" type="submit" name="signup_btn" value="Sign up">
            </form>
        </div>

    </div>
    <?php
    include("footer.php")
    ?>
</body>
</html>