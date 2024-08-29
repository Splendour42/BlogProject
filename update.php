<?php
include "connect.php";

$update = "UPDATE users SET name='Hudson', email='aa@gmail.com' WHERE id=1";
$execute = mysqli_query($conn, $update);
if ($execute) {
    echo "Updated";
}else {
    die("Update Failed");
}



?>