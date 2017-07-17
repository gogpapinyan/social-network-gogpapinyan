<?php
$profPicErr = "";
if (isset($_POST["change_profpic"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["prof_photo"]["name"]);
    $profpic = $target_file;
    $imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
    $check = getimagesize($_FILES["prof_photo"]["tmp_name"]);
    if ($check == false) {
        $profPicErr = "File is not an image.";
    } else {
        if ($_FILES["prof_photo"]["size"] > 500000) {
            $profPicErr = "Sorry, your file is too large.";
        } else {
            if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
                $profPicErr = "Only JPG, JPEG, PNG & GIF files are allowed.";
            } else {
                $profpic = $target_file;
                move_uploaded_file($_FILES["prof_photo"]["tmp_name"], $target_file);
                $profPicErr = "";
            }
        }
    }
}