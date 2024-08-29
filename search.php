<?php
include "connect.php";
session_start();




?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Search</title>
</head>
<body>

<table>

<thead>

  <tr>

      <th>id</th>
      <th>name</th>
      <th>email</th>
      <th>Password</th>

  </tr>
</thead>
    <tbody>
        <?php

        if (isset($_POST['submit'])) {
          $search_word = $_POST['search'];
          $select = "SELECT * FROM users WHERE name LIKE '%$search_word%' ";
          $query = mysqli_query($conn, $select);
        if (!$query) {
          die("Search failed" . mysqli_error($conn));
        }
        $count = mysqli_num_rows($query);
        if ($count==0) {
          echo "no results found";
        }else {
          // $select_all_items =mysqli_query($conn, $select);
          while ($row = mysqli_fetch_assoc($query)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
          }
        }
        
        
        
        
       
      
          echo "<tr>";

          echo "<td>$id</td> <td>$name</td> <td>$email</td> <td>$password</td>
          <td><a href='validate_delete.php?deleteid=$id'>Delete</a></td>
           <td><a href='validate_update.php?updateid=$id'>Update</a></td>";

          echo "</tr>";
        }
        ?>

        

    </tbody>



</table>


  
</body>
</html>