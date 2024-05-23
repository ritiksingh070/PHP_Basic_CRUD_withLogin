<?php

session_start();
// DB connection using OOPs approach
$servername = "localhost";
$username = "root";
$password = "";
$dbName = "myFirstDB";

$conn = new mysqli($servername,$username,$password,$dbName);
if($conn->connect_error){
    die("connection failed :" . $conn->connect_error);
}
else{
    echo "connection successful";
}







// DB connection using procedural approach

// $conn = @mysqli_connect($servername,$username,$password,$dbName);

// if($conn) echo "connection successful";
// else echo "connection failed" . mysqli_connect_error();