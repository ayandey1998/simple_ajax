<?php
$host = "localhost";
$userName = "root";
$password = "";
$dbName = "demo_db";

$db_connection = mysqli_connect($host, $userName, $password, $dbName) or die("MySQL Error");
if ($db_connection->connect_error) {
    die("Connection failed: " . $db_connection->connect_error);
}
