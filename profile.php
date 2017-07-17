<?php
include ("uploadprofpic.php");
session_start();
if (!count($_SESSION)) {
    header("location: Signin.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Profile</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div id="coverphoto">
        <img src="backgroundsignin.jpg" alt="cover">
    </div>
    <div id="profpic">
        <img src="<?php if (isset($profpic)) echo $profpic; else echo "unknown.png" ?>"  alt="profpic">
    </div>
    <form method="post" action="profile.php" enctype="multipart/form-data">
        <input type="file" name="prof_photo">
        <input type="submit" name="change_profpic" value="Change photo">
        <span class="signup_error"> <?php echo $profPicErr ?></span>
    </form>
    <span></span>
    <form id="logout" method="post" action="logout.php"><input type="submit" value="Log Out" name="logout"></form>
</body>
</html>