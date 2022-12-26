<?php


include("db.php");

?>
<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>
    <h2>Table</h2>
    <form method="POST" action="action_page.php">
        <label for="name">Name</label>
        <input type="text" name="name">
        <br>
        <label for="email">Email</label>
        <input type="email" name="email">
        <br>
        <label for="DOB">DOB</label>
        <input type="date" name="DOB">
        <br>
        <input type="submit" name="upload" value="Submit">
    </form>
    <br>
    <br>
    <a href="index.php">Show User</a>
    <br>
    <table border='10'>
        <tr>
            <th>id</th>
            <th>Name</th>
            <th>Email</th>
            <th>DOB</th>
            <th>Action</th>
        </tr>
        <?php
        $result = mysqli_query($db_connection, "SELECT * FROM students");
        while ($row = mysqli_fetch_array($result)) {
        ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['dob']; ?></td>
                <td>
                    <form action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                        <button type="submit" name="delete_btn">Delete</button>
                    </form>
                </td>
                <td><button> <a href="update.php?id= <?php echo $row['id']; ?>">Update</a></button></td>
            </tr>
        <?php } ?>
    </table>