<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>
<body>
    <div class="container">

        <!-- Display message -->
        <?php
        if(isset($_SESSION['success'])) {
            echo "<div class='alert alert-success'>" . $_SESSION['success'] . "</div>";
            unset($_SESSION['success']);
        } elseif(isset($_SESSION['errors'])) {
        ?>
        <div class="alert alert-danger">
            <ul>
            <?php
            foreach($_SESSION['errors'] as $error) {
                echo "<li>$error</li>";
            }
            unset($_SESSION['errors']);
            ?>
            </ul>
        </div>
        
        <?php
        }
        ?>
        <!-- End Display Message -->
        
        <form action="upload.php" method="POST" enctype="multipart/form-data">
            <input type="file" name="image">
            <input type="submit" name="submit">
        </form>
    </div>
    
</body>
</html>