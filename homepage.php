<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link rel="stylesheet" href="homepage.css">
</head>
<body>
      <header>
            <h1>PHP CRUD APPLICATION</h1>
            <nav>
               <a href="homepage.php">Logout</a>
               <a href="homepage.php">Register</a>
               <a href="login.php">login</a>
            </nav>
          </header>
    <form action="insert.php" method="POST">
        <div class="container">
            <h2> Employee Registration Form</h2>
            <div class="all">
                <input type="text" name="names" placeholder="Enter your names"required>
                <input type="text" name="email" placeholder="Enter your Email" required>
                <input type="password" name="password" placeholder="Enter your password"required>
                <input type="text" name="position" placeholder="Enter your Position" required>
                <input type="number" name="salary" placeholder="Enter your Salary" required>
                <button id="submit" >Register</button>

                <p>Already Have Account? <a href="">Login</a></p>
            </div>
        </div>
    </form>
</body>
        
    

</html>