<?php
    $server_name = "mysql_db";
    $user_name = "root";
    $password = "root";
    $db = "db_food_festive";

    $conn = new mysqli($server_name, $user_name, $password, $db);

    if($conn->connect_error) {
        die("Connection Failed: " . $conn->connect_error);
    }
?>