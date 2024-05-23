<?php
include('config/databse.php');



if (isset($_POST["submit"])) {

    extract($_POST);

    $date = date('Y-m-d H:i:S');
    $query = "INSERT INTO users (username,password,created_at) VALUES('$username','$password','$date')";
    $res = $conn->query($query);
    if ($res) {
        $_SESSION['success'] = "User created";
    } else {
        $_SESSION['error'] = "User creation failed";
    }
    header("LOCATION: allUsers.php");
}



?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="css/style.css" rel="stylesheet">
    <title>PHP CRUD Application</title>
</head>

<body>
    <section class="section">
        <h2>Register Form</h2>

        <form action="addUser.php" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>

                <button type="submit" name="submit">Signup</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="allUsers.php" class="footerbtn">All Users</a>

            <!-- <a href="logout.php" class="footerbtn">Logout</a> -->

        </div>
    </section>

</body>

</html>