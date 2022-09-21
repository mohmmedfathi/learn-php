<?php

$filePath = "uploads/images/1663528353_test.jpg";


if(file_exists($filePath)) {
    unlink($filePath);
} else {
    echo "file doesn't exist";
}