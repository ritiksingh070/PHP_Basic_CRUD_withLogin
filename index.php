<?php
    echo "Hello world <br>";
    include("config/databse.php");
    $date = date("Y-m-d H-i-s");
    $sql = "insert into users(username, password, created_at) values('ritik','pass123','$date')";

    $result = $conn->query($sql);
    if($result) echo "New record created";
    else echo "No record created" . $conn->error;

    // $query = "select id,username,created_at from users";
    // $result = $conn->query($query);

    // if($result->num_rows > 0){
    //     while($row = $result->fetch_assoc()){
    //         echo "<pre>";
    //         print_r($row);
    //         echo $row["username"];
    //     }
    // }

    //update

    // $query = "update users set username='rohan' where id=3 ";
    // $res = $conn->query($query);
    // if($res) echo "updated successfully";
    // else echo "error in updating" . $conn->error;

    //delete
    // $query = "delete from users where username = 'rohan' ";
    // $res = $conn->query($query);
    // if($res) echo "deleted successfully";
    // else echo "error in deleting" . $conn->error;

   
  

?>