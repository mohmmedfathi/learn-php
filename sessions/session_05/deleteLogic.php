<?php

include 'connect.php';

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM `categories` WHERE `id` = $id";
    $result = mysqli_query($conn, $query);

    echo "<div class='alert alert-success'>
                Category deleted Successfully!
            </div>";

} else {

    header("Location:all.php");
    exit;
}
