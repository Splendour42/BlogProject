<?php
include "connect.php";

if (isset($_POST['register'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $image = $_FILES['profile_picture']['name'];
    $image_temp = $_FILES['profile_picture']['tmp_name'];
    $target_dir = 'img/';
    $target_file = $target_dir . basename($image);
    $upload_ok = 1;


$select = "SELECT * FROM users WHERE name = '$name'";
    $exe = mysqli_query($conn, $select);

   $image_file_type = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
   $check = getimagesize($image_temp);
    if ($check === false) {
        $upload_error = "File is not an image.";
        $upload_ok = 0;
    }

    if ($_FILES['profile_picture']['size'] > 5000000) {
        $upload_error = "Sorry, your file is too large";
        $upload_error = 0;
    }

    if ($image_file_type != "jpg" && $image_file_type != "png" && $image_file_type != "jpeg" && $image_file_type != "gif") {
        $upload_error = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
        $upload_ok = 0;
    }

    if ($upload_ok) {
        if (!move_uploaded_file($image_temp, $target_file)) {
            $upload_error = "Sorry, there was an error uploading your file.";
           
        }
    }

    if (empty($name)) {
        $name_error = "Please insert your name";
    } elseif (strlen($name)< 6) {
        $name_error = "Username cannot be less than 6 characters";
    }elseif (mysqli_num_rows($exe)> 0) {
        $name_error = "Username already exist";
    }

    if (!preg_match("/^[a-zA_Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email)) {
        $email_error ="invalid email address";
    }

    if (preg_match("/^(?=.*\d) (?=.*[a-z]) (?=.*\W) (?=.*\s).{8,}$/", $password)){
        $password_error = "Password must contain at least one special character, digits, lowercase and uppercase";
      }



    if (empty($name_error) && empty($password_error) && empty($email_error) && empty($upload_error)) {
        
        $insert = "INSERT into users (name, email, password, picture)
                VALUES ('$name', '$email', '$password', '$image')";

$execute = mysqli_query($conn, $insert);

if ($execute) {
    echo "Submitted Sucessfully";
}else {
    die("Cannot submit");
}
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>

<form action="" method="POST" enctype="multipart/form-data">
    <label for="name">First Name</label>
    <input type="text" name="name" placeholder="Name">
    <br> <br>
<?php
if (isset($name_error)) {
    echo "<p style='color:red'>$name_error</p>";
}
?>

    <label for="email">Email</label>
    <input type="email" name="email" placeholder="Email">
    <br> <br>

            <?php
            if (isset($email_error)) {
                echo "<p style='color:red'>$email_error</p>";
            }
            ?>

    <label for="pwd">Password</label>
    <input type="password" name="password" placeholder="password">
    <br> <br>
        <?php
            if (isset($password_error)) {
                echo "<p style='color:red'>$password_error</p>";
            }
        ?>

    <label for="Profile Picture"></label>
        Profile Picture <input type="file" name="profile_picture" placeholder="Profile Picture"><br> <br>

    <button name="register">submit</button>

    <a href="login.php"><p> Login</p></a>
    <!-- <input type="button" value="Submit" name="register"> -->

</form>
    
</body>
</html>