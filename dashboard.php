<?php
include "connect.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Dashboard</title>
</head>
<body>

    <?php
    echo $_SESSION['name'].'<br>';
    echo $_SESSION['email'];
    ?>

<a href="logout.php">Logout</a><br>
<a href="delete_record.php">Delete</a>
  
</body>
</html>