<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<?php

include 'connect.php'; 

// $query = "SELECT * FROM `categories`";
// $result = mysqli_query($conn, $query);
// $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);


// $query = "INSERT INTO `categories` (`name`, `description`)
//             VALUES ('category from php', 'an inserted category from php')";

// $result = mysqli_query($conn, $query);


// $affectedRows = mysqli_affected_rows($conn);

// if($affectedRows >= 1 ) {

//     echo "Category inserted successfully";
// }


// $query = "UPDATE `categories` 
//             SET `name` = 'modified category from php'
//             WHERE `id` = '10'";

// $result = mysqli_query($conn, $query);

// $affectedRows = mysqli_affected_rows($conn);

// if($affectedRows >= 1 ) {

//     echo "Category updated successfully";
// }

// $query = "DELETE FROM `categories` WHERE `id` = '10'";
// $result = mysqli_query($conn, $query);
// $affectedRows = mysqli_affected_rows($conn);

// if($affectedRows >= 1 ) {
//     echo "Category deleted successfully";
// }


// echo "<pre>";
//     print_r($result);
// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <div class="container">
            <h1>Add Category</h1>
            <form action="logic.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Category Name</label>
                    <input type="text" name="name" class="form-control" id="name">
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Description</label>
                    <input type="text" name="description" class="form-control" id="description">
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</but>
            </form>
        </div>
    </body>
</html>