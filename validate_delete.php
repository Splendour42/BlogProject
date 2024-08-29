<?php
include "connect.php";
session_start();

if (isset($_GET['deleteid'])) {
  $id = $_GET['deleteid'];

  $query = "DELETE FROM users WHERE id = $id";
  $delete_query = mysqli_query($conn, $query);
  if ($delete_query) {
    header("Location: delete_record.php");
  }else {
    echo "Record not deleted";
  }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Validate Delete</title>
</head>
<body>
  
</body>
</html>