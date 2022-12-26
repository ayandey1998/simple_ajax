<?php
include("db.php");
$requestData = json_decode(file_get_contents("php://input"));
$q = " DELETE FROM `students` WHERE id = $requestData->id ";
$db_connection->query($q);
