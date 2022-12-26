<?php

include("db.php");

if (isset($_POST['done'])) {

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $DOB = $_POST['DOB'];
    $q = " update students set id=$id, name='$name', email='$email', DOB='$DOB' where id=$id  ";

    $query = mysqli_query($db_connection, $q);

    header('location:index.php');
}

?>
<?php
$result = mysqli_query($db_connection, "SELECT * FROM students WHERE id= " . $_GET['id']);
while ($row1 = mysqli_fetch_assoc($result)) {
    $id = $row1['id'];
    $a1 = $row1['name'];
    $a2 = $row1['email'];
    $a3 = $row1['dob'];
}
// echo $result;
?>
<!DOCTYPE html>
<html>

<head>
    <title></title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
    <form method="post" action="update.php">
        <h1> Update Operation </h1>
        </div><br>
        <input type="hidden" name="id" value="<?php echo $id; ?>">

        <label> name: </label>
        <input type="text" name="name" class="form-control" value="<?php echo $a1; ?>"> <br>

        <label> Email: </label>
        <input type="text" name="email" class="form-control" value=<?php echo $a2; ?>> <br>

        <label> DOB: </label>
        <input type="date" name="DOB" class="form-control" value=<?php echo $a3; ?>> <br>

        <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

        </div>
    </form>

    </div>
</body>

</html>