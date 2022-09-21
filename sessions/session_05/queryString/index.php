<?php
$myName = 'fady ibrahem';
$myEmail = 'fady@gmail.com';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Query Parameters</title>
</head>
<body>
    
    <h1>Query Parameters</h1>

    <a href="showData.php?name=<?php echo $myName; ?>&email=<?= $myEmail ?>">Go to Show Data Page</a>
</body>
</html>