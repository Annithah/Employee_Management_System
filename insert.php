<?php

include 'conn.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $names=$_POST['names'] ?? '';
    $email=$_POST['email']?? '';
    $password=$_POST['password']?? '';
    $position=$_POST['position']?? '';
    $salary=$_POST['salary']?? '';

    $sql = "INSERT INTO employee(names,email,password,position,salary) VALUES('$names','$email','$password','$position','$salary')";

  
    if ($conn->query($sql)=== true) {
      echo "connection occured successfully";
    }
    else {
        echo "error occured";
    }
       $conn->close();
}

?>