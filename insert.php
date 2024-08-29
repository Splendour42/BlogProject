<?php
include "connect.php";

// TO INSERT DATA INTO DATABASE
$ins = "INSERT INTO users (name, email, password) 
VALUES ('George', 'geroge@gmail.com', 'qwerty12345')";

$excecute = mysqli_query($conn, $ins);
if ($excecute) {
    echo "New record created successfully";
}else {
    die ('Record not inserted');
}

?>