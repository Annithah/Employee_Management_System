<?php
include 'conn.php';
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Crud Application PHP</title>
  <link rel="stylesheet" href="read.css">
</head>
<body>
  <header>
    <h1>PHP CRUD APPLICATION</h1>
    <nav>
      <a href="homepage.php">Logout</a>
      <a href="homepage.php">Register</a>
      <a href="login.php">Login</a>
    </nav>
  </header>

  <table>
    <tr>
      <th>ID</th>
      <th>Names</th>
      <th>Email</th>
      <th>Position</th>
      <th>Salary</th>
      <th>Actions</th>
    </tr>

    <?php
    $sql = "SELECT * FROM employee";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
      while ($row = $result->fetch_assoc()) {
        echo "<tr>
          <td>".$row['id']."</td>
          <td>".$row['names']."</td>
          <td>".$row['email']."</td>
          <td>".$row['position']."</td>
          <td>".$row['salary']."</td>
          <td>
            <a href='#' class='btn update-btn'>Update</a>
            <a href='#' class='btn delete-btn'>Delete</a>
          </td>
        </tr>";
      }
    } else {
      echo "<tr><td colspan='6'>No records found</td></tr>";
    }
    $conn->close();
    ?>
  </table>
</body>
</html>
