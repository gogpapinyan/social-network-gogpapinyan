<?php
session_start();
if (!isset($_SESSION["signin_user"]))  {
    header("location: Signin.php");
    exit();
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
        <img src="unknown.png" alt="profpic">
    </div>
    <span><?php echo $_SESSION["signin_user"] ?></span>
    <form id="logout" method="post" action="logout.php"><input type="submit" value="Log Out" name="logout"></form>
</body>

</html>