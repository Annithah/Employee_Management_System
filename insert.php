<?php

include 'conn.php';

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $position=$_POST['position'];
    $salary=$_POST['salary'];

    $sql = "INSERT INTO employe_management('name','email','password','position','salary') VALUES($name,$email,$password,$position,$salary)";
  if ($conn->query($sql)===TRUE) {
    echo "student inserted successfully!";
  }else{
    echo "Error".$conn->error;
  }

  $conn->close();

}

?>