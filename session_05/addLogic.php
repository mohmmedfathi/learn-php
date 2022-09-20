<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php

include 'connect.php';

if(isset($_POST['submit'])) {

    $errors = [];

    $name           = htmlspecialchars(trim($_POST['name']));
    $description    = htmlspecialchars(trim($_POST['description']));


    if(empty($name)) {
        $errors[] = "The name is empty! <br>";
    } elseif(strlen($name) < 3) {
        $errors[] = "Category name should be greater than 3 characters <br>";
    }

    if(empty($description)) {
        $errors[] = "The description is empty! <br>";
    }

    if(empty($errors)) {

        $query = "INSERT INTO `categories` (`name`, `description`)
                    VALUES ('$name', '$description')";
        $result = mysqli_query($conn, $query);
        $affectedRow = mysqli_affected_rows($conn);

        if($affectedRow >= 1) {
            echo "<div class='alert alert-success'>
                Category Inserted Successfully!
            </div>";
        }
        

    } else {
        ?>


        <div class="container">
            <div class="alert alert-danger">
                <ul>
                <?php
                foreach($errors as $error) {
                    echo "<li>$error</li>";
                }
                ?>
                </ul>
            </div>
        </div>



        <?php
    }

} else {

    header("Location:add.php");
    exit;
}
?>