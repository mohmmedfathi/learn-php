<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'instant_odc';

$conn = mysqli_connect($host, $user, $password, $database);


if($conn == false) {
    echo "error ocurred during connection" . mysqli_connect_error();
    die;
}
