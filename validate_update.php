<?php
include "connect.php";
session_start();

$id = $_GET['updateid'];
$query = "SELECT * FROM users WHERE id = $id";
$select_query = mysqli_query($conn, $query);
while ($row = mysqli_fetch_array($select_query)) {
  $iddb = $row['id'];
  $namedb = $row['name'];
  $emaildb = $row['email'];
  $passworddb = $row['password'];
}

if (isset($_POST['update'])) {
  $name_form = mysqli_real_escape_string($conn, $_POST['name']);
  $email_form = mysqli_real_escape_string($conn, $_POST['email']);
  $password_form = mysqli_real_escape_string($conn, $_POST['password']);

if (empty($name_form)) {
  $name_error = "Please insert your name";
}
if (!preg_match("/^[a-zA_Z0-9._-]+@[a-zA-Z0-9-]+\.[a-zA-Z.]{2,5}$/",$email_form)) {
  $email_error ="invalid email address";
}
if (preg_match("/^(?=.*\d) (?=.*[a-z]) (?=.*\W) (?=.*\s).{8,}$/", $password_form)){
  $password_error = "Password must contain at least one special character, digits, lowercase and uppercase";
}
if (empty($name_error) && empty($password_error) && empty($email_error)) {
        
  $update_values = "UPDATE users SET name = '$name_form', email = '$email_form', password = '$password_form'
  WHERE id = $id";

    $query = mysqli_query($conn, $update_values);

if ($query) {
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
  <title>Validate Update</title>
</head>
<body>

<form action="" method="POST">
    <label for="name">First Name</label>
    <input type="text" name="name" value='<?php echo $namedb;?>'>
    <br> <br>

    <?php
          if (isset($name_error)) {
              echo "<p style='color:red'>$name_error</p>";
          }
      ?>

    <label for="email">Email</label>
    <input type="email" name="email" value='<?php echo $emaildb;?>'>
    <br> <br>

         <?php
                  if (isset($email_error)) {
                      echo "<p style='color:red'>$email_error</p>";
                  }
            ?>

    <label for="pwd">Password</label>
    <input type="password" name="password" value='<?php echo $passworddb;?>'>
    <br> <br>

        <?php
            if (isset($password_error)) {
                echo "<p style='color:red'>$password_error</p>";
            }
        ?>
    
    <button name="update">Update</button>
    

</form>

  
</body>
</html>