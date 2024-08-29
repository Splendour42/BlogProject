
<?php
include 'connect.php';
session_start();

if (isset($_POST['login'])) {
  $email = mysqli_real_escape_string($conn, $_POST['email']);
  $password = mysqli_real_escape_string($conn, $_POST['password']);
  
  $select = "SELECT * FROM users WHERE email = '$email'";
  $query = mysqli_query($conn, $select);

 if ($query) {
  while ($row = mysqli_fetch_array($query)) {
    $emaildb = $row['email'];
    $passworddb = $row['password'];
    $name = $row['name'];
  }
  if (empty($email) || empty($password)) {
    $user_error = "Insert Email and Password"; 
  }elseif ($email == $emaildb && $password == $passworddb) {
    $_SESSION['name']=$name;
    $_SESSION['email']=$emaildb;
    header("location: dashboard.php");
    
  }elseif ($email == !$emaildb && $password == !$passworddb) {
    $user_error = "Incorrect username and password";
  }
 }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
</head>
<body>

<form action="" method="POST">

<input type="email" name="email" id="" placeholder="Email"><br><br>
<input type="password" name="password" id="" placeholder="Password"><br><br>

<?php 
if (isset($user_error)) {
  echo $user_error;
}
?>
<button name="login">Login</button>

</form>
  
</body>
</html>