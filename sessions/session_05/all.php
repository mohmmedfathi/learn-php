<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

<?php

include 'connect.php'; 

$query = "SELECT * FROM `categories`";
$result = mysqli_query($conn, $query);
$categories = mysqli_fetch_all($result, MYSQLI_ASSOC);

$i = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Categories</title>
</head>
<body>
    <div class="container">
        <h1 class="my-5">All Categories</h1>
        <a href="add.php" class="btn btn-primary my-2">
            Add Category
        </a>
        <table class="table">
            <thead>
                <tr>
                <th scope="col">#</th>
                <th scope="col">Category Name</th>
                <th scope="col">Category Description</th>
                <th scope="col">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach($categories as $category) {
                ?>
                <tr>
                    <th scope="row"><?= $i++ ?></th>
                    <td><?= $category['name'] ?></td>
                    <td><?= $category['description'] ?></td>
                    <td>
                        <a href="edit.php?id=<?= $category['id'] ?>" class="btn btn-secondary">
                            Edit
                        </a>
                        <a href="deleteLogic.php?id=<?= $category['id'] ?>" class="btn btn-danger">
                            Delete
                        </a>
                    </td>
                </tr>
                <?php
                }
                ?>
                
            </tbody>
        </table>
    </div>
</body>
</html>