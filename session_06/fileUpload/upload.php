<?php

session_start();

// Steps for uploading a file:
    // 1- store uploaded image information
    // 2- allowed image extensions
    // 3- Get the uploaded image extension
    // 4- validate imgName, imgEXT, imgSize
    // 5- finally store the image

// mb  = 1024 kb
// 1kb = 1024 b

$errors = [];

// Uploaded image information
$imgName    = $_FILES['image']['name'];
$imgSize    = $_FILES['image']['size'];
$imgType    = $_FILES['image']['type'];
$imgTmp     = $_FILES['image']['tmp_name'];


// Allowed image extension
$allowedEXT = ['jpeg', 'jpg', 'png', 'gif', 'svg'];

// Get Image Extension
$explodes = explode('.', $imgName);
$imgEXT = end($explodes);

// Validation
if(empty($imgName)) {
    $errors[] = "Image is required";
} elseif(!in_array($imgEXT, $allowedEXT)) {
    $errors[] = "this extension is not allowed";
} elseif($imgSize > 2097152) {
    $errors[] = "Image size should be less than 2MB";
}

if(empty($errors)) {

    $img = time() . "_" . $imgName;
    move_uploaded_file($imgTmp, "uploads/images/" . $img);

    $_SESSION['success'] = "Image Uploaded Successfully";
    header("Location: form.php");
    exit;

} else {
    foreach($errors as $error) {
        echo "$error <br>";
    }
    $_SESSION['errors'] = $errors;
    header("Location: form.php");
    exit;
}


// echo $name;
// echo "<pre>";
//     print_r($_FILES);
// echo "</pre>";
// exit;