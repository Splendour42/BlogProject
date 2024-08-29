<?php
include "connect.php";

$delete = "DELETE FROM users WHERE id=2";
$execute = mysqli_query($conn, $delete);
if ($execute) {
    echo "Deleted Successfully";
}else {
    die("Not Deleted");
}

?>