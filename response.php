<?php
include('db.php');

$name = $_POST['name'];
$email = $_POST['email'];
$DOB = $_POST['DOB'];

if ($name == NULL) {
    echo "<script>document.getElementById('nameerror').innerHTML='Required';</script>";
} else {
    echo "<script>document.getElementById('nameerror').innerHTML='';</script>";
}
if ($email == NULL) {
    echo "<script>document.getElementById('emailerror').innerHTML='Required';</script>";
} else {
    echo "<script>document.getElementById('emailerror').innerHTML='';</script>";
}
if ($DOB == NULL) {
    echo "<script>document.getElementById('DOBerror').innerHTML='Required';</script>";
} else {
    echo "<script>document.getElementById('DOBerror').innerHTML='';</script>";
}


if ($name == NULL || $email == NULL || $DOB == NULL) {
    echo "Fill the form";
} else {
    $sql = "INSERT INTO `students` (
			`name`, 
			`email`,
			`dob`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "',
			'" . $_POST['DOB'] . "'
		)";
    $result = $db_connection->query($sql);
    if ($result === true) {
        echo "Uploaded successfully";
    } else {
        echo "Failed!!";
    }
}
