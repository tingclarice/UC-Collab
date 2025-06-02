<?php
// function untuk connect ke database
function my_connectDB() {
    $host = 'localhost';
    $use = 'root';
    $pwd = "";
    $db = "uc-collab";

    $conn = mysqli_connect($host, $use, $pwd, $db) or die("Error connect to database");

    if($conn->connect_error) {
        echo ""
    }

    return $conn;
}

//  function untuk close connection
function my_closeDB($conn) {
    mysqli_close($conn);
}


?>