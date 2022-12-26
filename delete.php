<?php
include("db.php");

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $q = " DELETE FROM `students` WHERE id = $id ";
    $db_connection->query($q);
}

header('location:index.php');
?>