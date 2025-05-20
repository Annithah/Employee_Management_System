<?php
$server="localhost";
$username="root";
$password="";
$dbname="employe_management";

$conn= new mysqli($server,$username,$password,$dbname);

if($conn->connect_error){
    die("connection failed:".$conn->connect_error);
}
else{
    echo"we love you";
}

// define('DB_SERVER','localhost');
// define('DB_PASSWORD','');
// define('DB_USERNAME','root');
// define('DB_DATABASE','employe_management');

// $conn= mysql_connect(DB_SERVER,DB_PASSWORD,DB_USERNAME,DB_DATABASE);

// if ($conn === false) {
//     die("ERROR:connection failed".mysql_connect_error());
// }

?>