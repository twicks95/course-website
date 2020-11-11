<?php

// CREATING A CONNECTION TO DATABASE
$serverName = "localhost";
$username = "root";
$password = "";
$databaseName = "kursus_db";

$db = mysqli_connect($serverName, $username, $password, $databaseName);

if (!$db) {
    echo "Error number " . "[" . mysqli_connect_errno() . "]" . " : " . mysqli_connect_error();
    exit;
}


function query($query)
{

    global $db;
    $result = mysqli_query($db, $query);

    if (!$result) {
        echo "Error number " . "[" . mysqli_errno($db) . "]" . " : " . mysqli_error($db);
    } else {

        $users = [];

        while ($user = mysqli_fetch_assoc($result)) {
            $users[] = $user;
        }
    }

    return $users;
}
