<?php
include "connect.php";

$select = "SELECT * FROM users";
$execute = mysqli_query($conn, $select);
if (mysqli_num_rows($execute) >0) {
    while ($row = mysqli_fetch_assoc($execute)) {
        echo $row["id"]. $row["name"]. $row["email"]. $row["password"]."<br>";
    }
}else {
    echo "No result";
}

?>