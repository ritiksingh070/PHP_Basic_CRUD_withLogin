<?php
include('config/databse.php');
// get user form id 
$id = $_GET['id'];

$query = "SELECT * FROM users WHERE id= $id";
$result = $conn->query($query);
$user = mysqli_fetch_assoc($result);

// update user

if (isset($_POST['submit'])) {
    extract($_POST);
    
    $query = "UPDATE users SET username='$username' WHERE id=$id";
    $result = $conn->query($query);
    
    if ($result) {
        $_SESSION['success'] = "User Updated";
    } else {
        $_SESSION['error'] = "User Update failed";
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
        <h2>Edit User</h2>

        <form action="editUser.php?id=<?php echo $user['id'] ?>" method="post">
            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required value="<?php echo $user['username'] ?>">

                <?php
                /* <label for="psw"><b>Password</b></label>
                    <input type="text" placeholder="Enter Password" name="password" required value="<?php echo $user['password'] ?>">
                */ ?>

                <button type="submit" name="submit">Update</button>
            </div>
        </form>

        <div class="container" style="background-color:#f1f1f1">
            <a href="allUsers.php" class="footerbtn">All Users</a>
        </div>
    </section>

</body>

</html>