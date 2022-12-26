<?php

include("db.php");
$db = $db_connection;

// fetch query
function fetch_data()
{
    global $db;
    $query = "SELECT * from students";
    $exec = mysqli_query($db, $query);
    if (mysqli_num_rows($exec) > 0) {
        $row = mysqli_fetch_all($exec, MYSQLI_ASSOC);
        return $row;
    } else {
        return $row = [];
    }
}
$fetchData = fetch_data();
show_data($fetchData);

function show_data($fetchData)
{
    if (count($fetchData) > 0) {
        $id = 1;
        foreach ($fetchData as $data) {
            echo "<tr>
                <td>" . $id . "</td>
                <td>" . $data['name'] . "</td>
                <td>" . $data['email'] . "</td>
                <td>" . $data['dob'] . "</td>
                <td>
                    <button type='submit' class='delete-btn' onclick='onDelete(" . $data['id'] . ")'>Delete</button>
                </td>
            </tr>";
            $id++;
        }
    } else {

        echo "<tr>
        <td colspan='7'>No Data Found</td>
       </tr>";
    }
    echo "</table>";
}
