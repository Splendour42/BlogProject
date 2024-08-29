<?php
include "connect.php";
session_start();




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Delete Record</title>
</head>
<body>

        <form action="search.php" method="POST">
        <input type="text" name="search" placeholder="&#128269 search">
        <button name="submit">Search</button>

    </form>

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
              
              $select = "SELECT * FROM users";
              $select_query = mysqli_query($conn, $select);
              if (!$select_query) {
                echo "Select query failed";
              }
              while ($row = mysqli_fetch_array($select_query)) {
                $id = $row['id'];
                $name = $row['name'];
                $email = $row['email'];
                $password = $row['password'];
                $image = $row['picture'];
             
            
                echo "<tr>";

                echo "<td>$id</td> <td>$name</td> <td>$email</td> <td>$password</td><td><img style='width: 100px' src='img/$image'></img></td>
                <td><a href='validate_delete.php?deleteid=$id'>Delete</a></td>
                 <td><a href='validate_update.php?updateid=$id'>Update</a></td>";

                echo "</tr>";
              }
              ?>

              

          </tbody>



    </table>
  
</body>
</html>