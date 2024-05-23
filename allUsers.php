<?php
include('config/databse.php');

$query  = "select * from users";
$result = $conn->query($query);


//delete user
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $query = "DELETE FROM users WHERE id=$id";
    $res = $conn->query($query);
    if ($res) {
        echo "user deleted";
    } else echo "user delete failed";
}

// echo "<pre>";
// print_r($_GET);
// exit;

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
        <?php include("include/alert.php") ?>
        
        <h2>All Users</h2>

        <table id="users">
            <thead>
                <tr>
                    <th>Username</th>
                    <th>Created At</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                if ($result->num_rows > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                ?>
                        <tr>
                            <td>
                                <?php echo $row['username']  ?>
                            </td>
                            <td>
                                <?php echo date("d-m-Y H:i A", strtotime($row['created_at']))  ?>
                            </td>
                            <td>
                                <a href="editUser.php?id=<?php echo $row['id'] ?>" class="button edit">Edit</a>
                                <a href="allUsers.php?id=<?php echo $row['id'] ?>" class="button delete">Delete</a>
                            </td>
                        </tr>
                <?php  }
                } else {
                    echo "<tr><td colspan='3'>No record found!</td></tr>";
                }
                ?>
            </tbody>
        </table>

        <div class="container" style="background-color:#f1f1f1">
            <a href="addUser.php" class="footerbtn">Add User</a>

            <a href="logout.php" class="footerbtn">Logout</a>
        </div>
    </section>

</body>

</html>