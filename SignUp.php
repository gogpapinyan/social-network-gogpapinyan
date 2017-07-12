<?php
if ($_POST["username"]) {
    trim($_POST["username"], " ");
}
if ($_POST["psw"]) {
    trim($_POST["psw"]," ");
}
include("signupvalid.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twime - Sign Up </title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    include("signinheader.php");
    include("uploadprofpic.php");
    ?>
    <div id="wrapper_signup">
        <form action="SignUp.php" method="post" enctype="multipart/form-data">
            <div><input name="reg_name" type="text"  placeholder="Your name"><span class="errors"><?php echo $nameErr ?></span></div>
            <div><input name="reg_surname" type="text"  placeholder="Your surname"><span class="errors"><?php echo $surnameErr ?></div>
            <div><input name="reg_password" type="password"  placeholder="Your new password"><span class="errors"><?php echo $passwordErr ?></span></div>
            <div><input name="reg_country" type="text"  placeholder="Your country"></div>
            <div><input name="reg_city" type="text"  placeholder="Your city"></div>
            <div>
                <span>Your birthday</span>
                <input type="date" name="birthdate" placeholder="Your birth date">
                <span class="errors"><?php echo $birthdayErr ?></span>
            </div>
            <div id="gender">
                <input type="radio" value="Male" name="male" id="male">
                <label for="male">Male</label>

            <input type="radio" value="Female" name="female" id="female">
                <label for="female">Female</label>
                <span class="errors"><?php echo $genderErr ?></span>
            </div>
            <div>
                <label for="prof_photo">Your new profile pricture</label>
                <input type="file" id="prof_photo" name="prof_photo">
                <span class="errors"><?php echo $profPicErr ?></span>
            </div>
            <div>
                <input type="submit" value="Sign Up" name="signup">
            </div>
        </form>
    </div>
    <?php
    include("footer.php");
    ?>
</body>
</html>