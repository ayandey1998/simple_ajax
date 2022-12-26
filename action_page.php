<?php
include('db.php');


$sql = "INSERT INTO `students` (
			`name`, 
			`email`,
            `dob`
		) VALUES (
			'" . $_POST['name'] . "',
			'" . $_POST['email'] . "',
            '" . $_POST['DOB'] . "'
		)";

$queryResult = $db_connection->query($sql);
header('location:index.php');
